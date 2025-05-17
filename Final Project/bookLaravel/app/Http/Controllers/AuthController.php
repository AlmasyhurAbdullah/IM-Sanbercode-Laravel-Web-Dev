<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showregister()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
         $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|min:5',
            'password' => 'required|confirmed|min:8',
        ]);
        
        $userCount = User::count();

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $userCount === 0 ? 'admin' :'user';

        $user->save();

        return redirect('/')->with('success', 'Registered');
    }

    public function showlogin()
    {
        return view('auth.login');

        $request->validate([
            'email' => 'required|min:5',
            'password' => 'required|confirmed|min:8',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('success', 'Logged in');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('success', 'Logged out');
    }
}
