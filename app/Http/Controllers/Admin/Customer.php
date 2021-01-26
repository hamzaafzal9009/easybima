<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use DataTables;
use Illuminate\Http\Request;

class Customer extends Controller
{
    public function index()
    {
        return view('admin.customers.index');
    }

    public function getCustomers(Request $request)
    {
        return Datatables::eloquent(
            User::with('userProfile')->where('role_id', '2')->orderBy('id', 'desc')
        )->addIndexColumn()->toJson();
    }

    public function blockCustomer($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', 'User Blocked Successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to Block User at This Moment!');
        }
    }

    public function blockedCustomers()
    {
        return view('admin.customers.blocked');
    }
    public function getBlockedCustomers()
    {
        return Datatables::eloquent(
            User::withTrashed()->where('deleted_at', '<>', null)
        )->addIndexColumn()->toJson();
    }

    public function unblockCustomer($id)
    {
        $user = User::withTrashed()->find($id);
        if ($user->restore()) {
            return redirect()->back()->with('success', 'User Restored Successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to Restore User at This Moment!');
        }
    }

    public function deleteCustomer($id)
    {
        ;
        if (User::where('id', $id)->forceDelete()) {
            return redirect()->back()->with('success', 'User Deleted Successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to Delete User at This Moment!');
        }
    }
}
