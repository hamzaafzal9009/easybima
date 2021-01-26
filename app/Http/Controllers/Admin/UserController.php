<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\CompanyPolicy;
use App\Company;
use App\Policy;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function getNewUsers(){
        $users = User::with('roles')->where('id', '<>', 1)->orderBy('id','desc')->get()->take(10);
        // return $users;
        $usersWithRoles = [];
        foreach ($users as $key => $user) {
            $usrs = [
                'id' => $key,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => ''
            ];

            $roles = [];
            foreach ($user->roles as $key => $role) {
                $rl = $role->r_name;
                array_push($roles, $rl);
            }
            $usrs['roles'] = implode(", ",$roles);
            array_push($usersWithRoles, $usrs);
        }

        if ($usersWithRoles) {
            return response()->json(['users', $usersWithRoles], 200);
        }else{
            return response()->json(['status', 'No User Found'], 403);
        }
    }

    public function getAllUsers(){
        $users = User::with('roles')->where('id', '<>', 1)->orderBy('id','desc')->get();
        return response()->json(['users', $users], 200);
        // return $users;
        // $usersWithRoles = [];
        // foreach ($users as $key => $user) {
        //     $usrs = [
        //         'id' => $key,
        //         'name' => $user->name,
        //         'email' => $user->email,
        //         'roles' => $user->roles
        //     ];

        //     $roles = [];
        //     foreach ($user->roles as $key => $role) {
        //         $rl = $role->r_name;
        //         array_push($roles, $rl);
        //     }
        //     $usrs['roles'] = implode(", ",$roles);
        //     array_push($usersWithRoles, $usrs);
        // }

        // if ($usersWithRoles) {
        //     return response()->json(['users', $usersWithRoles], 200);
        // }else{
        //     return response()->json(['status', 'No User Found'], 403);
        // }
    }

    public function addUser(Request $request){
        $users = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => Str::random(80)
        ];
        try {
            $user = User::create($users);
        }catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['status', 'Email Already Exists!'], 402);
            }
        }
        if (!$user instanceof User) {
            return response()->json(['status', 'Unable to create user at this moment!'], 401);

        }else{
            $user->roles()->attach($request->roles);
            if (!$user->roles) {

                return response()->json(['status', 'Unable to create user at this moment!'], 401);

            }
            return response()->json(['status', 'User Created Successful'], 200);
        }

    }

    public function deleteUser(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user->delete()){
            return response()->json(['status', 'User Deleted Successful'], 200);
        }else{
            return response()->json(['status', 'Cannot be deleted at this moment.'], 200);
        }
    }

    public function logout(){
        Auth::logout();
    }

    public function updateUser(Request $request){

        // $user = User::findOrFail($request->id);
        $user = User::where('email', $request->email)->first();

        $user->name = $request->name;
        $user->password = bcrypt($request->password);

        if (!$user->save()) {
            return response()->json(['status', 'Unable to update user'], 401);
        }else{
            if ($request->roles != null) {
                $user->roles()->sync($request->roles);
                if (!$user->roles) {
                    return response()->json(['status', 'Unable to update user Role'], 401);

                }
            }

            return response()->json(['status', 'User Update Successful'], 200);
        }
    }

    public function customerDetails($id)
    {
        $customer = User::with('userProfile')->where('id', $id)->first();
        $userSelected = User::with('userSelectedPoliciesCompanies')->where('id', $id)->first();
        $userSelectedCompanyPolicy = $userSelected->userSelectedPoliciesCompanies->company_policy_id;
        $companyPolicy = CompanyPolicy::find($userSelectedCompanyPolicy);
        $company = Company::find($companyPolicy->company_id);
        $policy = Policy::find($companyPolicy->policy_id);
        return view('admin.customers.details', compact(['customer', 'company', 'policy']));

    }
}
