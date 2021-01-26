<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\CompanyFeature;
use App\CompanyPolicy;
use App\CompanyPolicyDetail;
use App\Http\Controllers\Controller;
use App\Policy;
use DataTables;
use Illuminate\Http\Request;
use App\CompanyPolicyPrice;

class Companies extends Controller
{
    public function index()
    {
        return view('admin.companies.index');
    }

    public function allCompanies()
    {
        return Datatables::eloquent(
            Company::withCount('policies', 'users')->orderBy('id', 'desc')
        )->addIndexColumn()->toJson();
    }

    public function company($id)
    {
        $company = Company::with('policies')->find($id);
        $companyUsers = $company->users;
        $users = array();
        foreach ($companyUsers as $companyUser) {
            $userSelected = $companyUser->users;
            array_push($users, $userSelected);
        }
        return view('admin.companies.details', compact(['users', 'company']));
    }

    public function addCompany(Request $request)
    {
        $validation = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cName' => 'required',
            'cOwner' => 'required',
            'cNum' => 'required|numeric',
        ],
            [
                'cName.required' => "Name is Required",
                'cOwner.required' => "Owner Name is Required",
                'cNum.required' => "Contact Number is Missing",
                'cNum.numeric' => "Contact info must be in numbers",
                'logo.required' => "Logo is Required",
                'logo.max' => "Logo Size must not increase 2mb",

            ]);

        $image = $request->file('logo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $new_name);
        $data = [
            'c_name' => $request->cName,
            'c_contact' => $request->cNum,
            'c_owner' => $request->cOwner,
            'c_logo' => $new_name,
        ];
        if (Company::create($data)) {
            return redirect()->back()->with('success', 'Company Added Successfully!');
        }
    }

    public function getCompanyPolicyFeaturesDetails($policy_id, $company_id)
    {
        $features = CompanyFeature::with('features')->where('company_id', $company_id)->get()->toArray();

        $mData = [];
        foreach ($features as $key => $feature):
            if ($feature['features']['policy_id'] == $policy_id) {
                array_push($mData, $feature);
            }
        endforeach;
        $company = Company::find($company_id);
        $policy = Policy::find($policy_id);
        $details = CompanyPolicyDetail::where('company_id', $company_id)->where('policy_id', $policy_id)->first();
        return view('admin.companies.policy-details', compact(['mData', 'company', 'policy', 'details']));
    }

    public function assignPage($companyID)
    {
        $company = Company::find($companyID);
        $policies = Policy::get();
        return view('admin.companies.assignPolicy', compact(['company', 'policies']));
    }

    public function getPolicyFeatures($p_id)
    {
        $policy = Policy::with('features')->find($p_id);
        return response()->json($policy->features);
    }

    public function assignNewPolicy(Request $request)
    {

        
        $p_id = $request->policy_id;
        $company = Company::find($request->c_id);
        $policy = Policy::with('features')->find($p_id);

        if (!$company->policies()->attach($p_id)) {
            foreach ($request->feature_detail as $key => $value) {
                $data = [
                    'feature_id' => $key,
                    'company_id' => $request->c_id,
                    'feature_details' => $value,
                ];

                if (!CompanyFeature::create($data)) {
                    return redirect()->back()->with('error', 'features');
                }
            }
            $detailsData = [
                'policy_id' => $p_id,
                'company_id' => $request->c_id,
                'details' => $request->p_details,
            ];
            if (CompanyPolicyDetail::create($detailsData)) {
                
                $priceData = [
                    'p_id' => $p_id,
                    'c_id' => $request->c_id,
                    'price' => $request->p_price
                ];

                if (CompanyPolicyPrice::create($priceData)) {
                    return redirect()->back()->with('success', 'Policy Assigned Successfully');    
                }
            } else {
                return redirect()->back()->with('error', 'Details');
            }
        } else {
            return redirect()->back()->with('error', 'Policy Assigned Unsuccessfully');
        }
    }

    public function deleteAssignedPolicy($policy_id, $company_id)
    {
        $policy = CompanyPolicy::where('company_id', $company_id)->where('policy_id', $policy_id)->first();

        if ($policy->delete()) {
            return redirect()->back()->with('success', 'Policy Dismissed');
        }
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.companies.edit', compact(['company']));
    }

    public function update(Request $request)
    {

        $company = Company::where('id', $request->c_id)->first();
        // dd($company);
        $validation = $request->validate([
            'cName' => 'required',
            'cOwner' => 'required',
            'cNum' => 'required|numeric',
        ],
            [
                'cName.required' => "Name is Required",
                'cOwner.required' => "Owner Name is Required",
                'cNum.required' => "Contact Number is Missing",
                'cNum.numeric' => "Contact info must be in numbers",
                'logo.required' => "Logo is Required",

            ]);

        $company->c_name = $request->cName;
        $company->c_owner = $request->cOwner;
        $company->c_contact = $request->cNum;
        // $company->c_logo = $new_name;

        if ($company->save()) {
            return redirect()->back()->with('success', 'Company Updated Successful');
        }
        return redirect()->back()->with('success', 'Something Went Wrong');
    }

    public function delete($id)
    {
        $company = Company::find($id);
        if ($company->delete()) {
            return redirect()->back()->with('success', 'Company Deleted');
        }
        return redirect()->back()->with('error', 'Unable to delete company');
    }
}
