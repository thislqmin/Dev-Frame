<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function processSignup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'password.confirmed' => 'Retype password tidak sesuai.',
        ]);

        UserModel::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('regis.signin')->with('success', 'Signup successful. You can now log in.');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        $errorMessage = 'Email atau password yang Anda masukkan salah.';
        return back()->withErrors(['error_message' => $errorMessage])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('regis.signin')->with('success', 'Logged out successfully.');
    }
}

