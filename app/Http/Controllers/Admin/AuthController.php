<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller{

    public function index()
    {
        return view('login');
    }  
    public function register()
    {
        return view('register');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('adminHome');
        }
        return redirect()->back()->with('error', 'Opps! You entered the invalid creds');
    }
    public function postRegister(Request $request)
    {  
        request()->validate([
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
      
        return redirect()->route('adminHome');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
