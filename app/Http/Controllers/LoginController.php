<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function registration() {
        return view('User.Registration');
    }


    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    
        $user->user_name = strtolower(str_replace(' ', '_', $request->name)) . rand(100, 999);
    
        $user->save();
    
        $request->session()->put('user', $user);
    
        return redirect('/')->with('success', 'Sign up successful!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user', $user); 
            $request->session()->put('user_id', $user->user_id);
            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials']);

    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');  
        $request->session()->forget('user_id');  

        Auth::logout();  

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();  

        return redirect()->route('register')->with('success', 'Logged out successfully.');
    }

    public function forgot() {
        return view('User.Forgot');
    }
}
