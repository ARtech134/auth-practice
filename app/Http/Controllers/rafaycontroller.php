<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class rafaycontroller extends Controller
{
    public function login (Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            return view('innerlogin');
        }

    }


    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'loginpassword' => 'required|min:6|confirmed',
            'loginpassword_confirmation' => 'required',
        ]);

        $user = new \App\Models\User();
        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['loginpassword']);
        $user->save();

        if(Auth::attempt(['email' => $validate['email'], 'password' => $validate['loginpassword']])){
            $request->session()->regenerate();
            return redirect()->route('login')->with('success', 'Registration successful!');
        }
        
        return redirect()->back()->with('error', 'Registration failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
