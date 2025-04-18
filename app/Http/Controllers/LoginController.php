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
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);
    
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
    
        // $user->user_name = strtolower(str_replace(' ', '_', $request->name)) . rand(100, 999);
    
        // $user->save();
    
        // $request->session()->put('user', $user);
    
        // return redirect('/')->with('success', 'Sign up successful!, now Login with your credentials');




        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);
    
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->user_name = strtolower(str_replace(' ', '_', $request->name)) . rand(100, 999);
        // $user->save();
    
        // $request->session()->put('user', $user);
    
        // return redirect()->route('register')->with('success', 'Sign up successful! Now login with your credentials.');




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

        Auth::login($user);

        $request->session()->put('user', $user);
        $request->session()->put('user_id', $user->user_id);

        return redirect()->route('home')->with('success', 'Sign up successful!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    
        if ($user->suspend_account == 1) {
            return back()->withErrors(['email' => 'Your account has been temporarily suspended.']);
        }
    
        if (Auth::attempt($credentials)) {
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

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed',
        ]);
    
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect('/registration')->with('success', 'Password reset successful! You can now log in.');
        }
    
        return back()->withErrors(['email' => 'Email not found.']);
    }
}
