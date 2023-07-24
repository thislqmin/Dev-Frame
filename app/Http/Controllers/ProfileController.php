<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    // Method untuk menampilkan halaman profile
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.create-profile', compact('user'));
    }

    // Method untuk menyimpan atau mengupdate profile
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
            'occupation' => 'required|string|max:255',
            'workplace' => 'required|string|max:255',
            'birthplace' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'bio' => 'required|string|max:1000',
        ]);
        $user = Auth::user()->profile;
        $profileData = [
            'user_id' => $request->input('user_id'),
            'phone' => $request->input('phone'),
            'occupation' => $request->input('occupation'),
            'workplace' => $request->input('workplace'),
            'birthplace' => $request->input('birthplace'),
            'birthdate' => $request->input('birthdate'),
            'bio' => $request->input('biodata'),
        ];
        $user->profile()->updateOrCreate(['user_id' => $user->id], $profileData);

        return redirect()->route('profile.view')->with('success', 'Profile updated successfully!');
    }
    public function view()
    {
        $user = Auth::user();
        $profile = $user->profile;

        return view('dashboard.profile', compact('profile'));
    }

}

