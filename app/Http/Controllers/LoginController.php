<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard');
                       // ->withSuccess('Signed in');
        }else
        {
            return redirect()->back()->with('fail','Failed to login, incorrect username or password ');
        }

    }

    public function logout(Request $request)
    {
     //  $this->guard()->logout();
    // Auth::logout();
     $r=$request->session()->flush();   
     return redirect('/');
    }

}
