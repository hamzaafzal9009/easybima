<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Policy;
use App\User;
use DataTables;
use App\PFeature;
use Illuminate\Http\Request;

class PoliciesController extends Controller
{

    public function index()
    {
        return view('admin.policies.index');
    }

    public function allPolicies()
    {
        return Datatables::eloquent(
            Policy::withCount('companies', 'users')->orderBy('id', 'desc')
        )->addIndexColumn()->toJson();
    }

    public function editPolicy($id)
    { 
        $policy = Policy::with('features')->find($id);
        // dd($policy->features);
        return view('admin.policies.edit', compact('policy'));
    }

    public function updatePolicy(Request $request)
    {
        $policy = Policy::find($request->id);
        $policy->p_name = $request->p_name;
        // dd($request->all());
        if ($policy->save()) {
            foreach ($request->feature as $key => $value) {

                $pFeature = PFeature::find($key);
                $pFeature->p_feature = $value;
                if (!$pFeature->save()) {
                    return redirect()->back()->with('error', 'Unable to Update Policy Features at This Moment!');
                }
            }
            return redirect()->back()->with('success', 'Policy Updated Successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to Update Policy at This Moment!');
        }
    }

    public function policyCompanies($policy_id)
    {
        $policy = Policy::find($policy_id);
        $companies = Policy::with('companies')->where('id', $policy_id)->orderBy('id', 'desc')->get();

        $policies = Policy::with('users')->orderBy('id', 'desc')->get();
        $users = array();
        foreach ($policies as $policy) {
            $userSelected = $policy->users;
            if (count($userSelected) != 0) {
                foreach ($userSelected as $usrs) {
                    $user = User::find($usrs->user_id);
                    array_push($users, $user);
                }
            }
        }
        return view('admin.policies.details', compact(['policy', 'companies', 'users']));
    }
 
    public function getPolicyCompanies($policy_id)
    {
        return Datatables::eloquent(
            Policy::with('companies')->where('id', $policy_id)->orderBy('id', 'desc')
        )->addIndexColumn()->toJson();
    }

    public function addPolicyFeature(Request $request ,$policy_id)
    {
        $validation = $request->validate([
            'pFeature' => 'required'
        ],
        [
            'pFeature.required' => "Policy Feature Name is Required"
        ]);
        $data = [
            'policy_id' => $policy_id,
            'p_feature' => $request->pFeature
        ];

        if (PFeature::create($data)) {
            return redirect()->back()->with('success', 'Feature Added Successfully!');
        }
    }


    public function deletePolicyFeature($f_id)
    {
        $feature = PFeature::find($f_id);
        if ($feature->delete()) {
            return redirect()->back()->with('success', 'Feature Deleted Successfully!');
        }else{
            return redirect()->back()->with('error', 'Unable to delete feature at this moment!');
        }
    }
}
