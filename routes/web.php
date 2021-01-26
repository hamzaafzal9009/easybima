<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Auth::routes(['verify' => true]);

Route::get('/', 'MainController@comingSoon')->name('comingsoon');
Route::post('/coming', 'MainController@addUser')->name('coming.updates');

Route::get('/home', 'MainController@index')->name('home');
Route::get('/adult-health-insurance', 'Insurance@adultHealthInsurance')->name('adultHealthInsurance');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::group(['middleware' => ['can:isAllowed, "superadmin:admin"']], function () {

            // Customers
            Route::get('/customers', 'Customer@index')->name('customersHome');
            Route::get('/all-customers', 'Customer@getCustomers')->name('customers.getCustomers');
            Route::get('/block-customer/{id}', 'Customer@blockCustomer')->name('customers.block');
            Route::get('/blocked-customer', 'Customer@blockedCustomers')->name('customers.blocked');
            Route::get('/get-blocked-customer', 'Customer@getBlockedCustomers')->name('customers.getBlocked');
            Route::get('/unblock-customer/{id}', 'Customer@unblockCustomer')->name('customers.unblock');
            Route::get('/delete-customer/{id}', 'Customer@deleteCustomer')->name('customers.delete');

            // Policies
            Route::get('/policies', 'PoliciesController@index')->name('policies.index');
            Route::get('/all-policies', 'PoliciesController@allPolicies')->name('policies.allPolicies');
            Route::get('/edit-policy/{id}', 'PoliciesController@editPolicy')->name('policy.edit');
            Route::post('/edit-policy', 'PoliciesController@updatePolicy')->name('policy.update');
            Route::post('/add-policy-feature/{policy_id}', 'PoliciesController@addPolicyFeature')->name('policy.addPolicyFeature');
            Route::get('/delete-policy-feature/{policy_id}', 'PoliciesController@deletePolicyFeature')->name('policy.deletePolicyFeature');
            Route::get('/policy-companies/{policy_id}', 'PoliciesController@policyCompanies')->name('policy.policyCompanies');
            Route::get('/get-policy-companies/{policy_id}', 'PoliciesController@getPolicyCompanies')->name('policies.getPolicyCompanies');


            // User Details
            Route::get('/user-details/{id}', 'UserController@customerDetails')->name('users.details');

            // Companies
            Route::get('/companies', 'Companies@index')->name('companies.index');
            Route::get('/all-companies', 'Companies@allCompanies')->name('companies.all');
            Route::get('/company/{id}', 'Companies@company')->name('companies.single');
            Route::get('/delete-company/{id}', 'Companies@delete')->name('companies.delete');
            Route::get('/edit-company/{id}', 'Companies@edit')->name('companies.edit');
            Route::get('/update-company', 'Companies@update')->name('companies.update');
            Route::get('/company-policy-features-details/{policy_id}/{company_id}', 'Companies@getCompanyPolicyFeaturesDetails')->name('companies.features');
            Route::post('/add-company', 'Companies@addCompany')->name('companies.add');
            Route::get('/company/{id}/assign-policy', 'Companies@assignPage')->name('companies.assign');
            Route::get('/company/policy/{p_id}/features', 'Companies@getPolicyFeatures')->name('companies.getPolicyFeatures');
            Route::post('/company/assign-new-policy', 'Companies@assignNewPolicy')->name('companies.assignNewPolicy');
            Route::get('/company/delete-assign-new-policy/{policy_id}/{company_id}', 'Companies@deleteAssignedPolicy')->name('companies.deleteAssignedPolicy');
        });

    });
});
