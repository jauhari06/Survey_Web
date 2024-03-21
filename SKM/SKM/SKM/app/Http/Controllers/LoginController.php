<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required'],
            ]);
    
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
    
            // Check user role and redirect accordingly
            if (Auth::guard('admin')->user()->role == 'admin') {
                return redirect()->intended('admin');
            } else if (Auth::guard('admin')->user()->role == 'superadmin') {
                return redirect()->intended('superadmin');
            }
        }
    
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}