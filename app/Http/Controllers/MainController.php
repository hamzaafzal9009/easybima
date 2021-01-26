<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\UpdatesEmail;

class MainController extends Controller
{
    public function index(){
      return view('frontend.index');
    }
    public function comingSoon(){
        return view('coming');
    }

    public function addUser(Request $request){
        $users = [
            'name' => $request->name,
            'email' => $request->email
        ];
        try {
            $user = User::create($users);
        }catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return redirect()->back()->with('status', 'Email Already Exists!');
            }
        }
        if (!$user instanceof User) {
            return redirect()->back()->with('status', 'Something went wrong');
        }else{
            Mail::to($request->email)->send(new UpdatesEmail($request->name));
            $user->roles()->attach(4);
            return redirect()->back()->with('status', 'You will Get Email when we got Live');
        }
    }
}
