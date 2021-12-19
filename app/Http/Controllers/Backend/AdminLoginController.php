<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.adminlogin');
    }

    public function doLogin(Request $request)
    {


        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');
        //     'email'=>$request->email,
        //     'password'=>($request->password),
        // ];

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with('message','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','LogOut.');
    }
}


 