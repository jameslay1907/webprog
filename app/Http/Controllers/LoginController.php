<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login(){

        return view('login.login');

    }

    public function authenticate(Request $request){

        $validation = [

            'email' => ['required', 'email:dns'],
            'password' => ['required']

        ]; 

        $credentials = $request->validate($validation);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->intended('/');

        }

        return back()->with('loginError', 'Login Failed! Check Your Email and Password Again!');

    }

    public function logout(){

        Auth::logout();

        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
    
        return redirect('/');
    }

}
