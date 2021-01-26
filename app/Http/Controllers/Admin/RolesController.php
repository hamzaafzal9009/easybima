<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Role;

class RolesController extends Controller{
    
    public function index(){
        $roles = Role::where('id', '<>', 1)->get();
        
        return response()->json(['roles', $roles], 200);
        
    }
}
