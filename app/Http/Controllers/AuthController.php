<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            // regenerate session
            $request->session()->regenerate();
            // redirect to dashboard
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'email atau Password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin')->with('message','logout success');
    }
}
