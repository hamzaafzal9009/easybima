<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Auth;

class DashboardController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard');
    }
}
