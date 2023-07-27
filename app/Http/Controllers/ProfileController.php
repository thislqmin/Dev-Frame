<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Method untuk menampilkan halaman profile
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.create-profile', compact('user'));
    }

    // Method untuk menyimpan atau mengupdate profile
    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
            'occupation' => 'required|string|max:255',
            'workplace' => 'required|string|max:255',
            'birthplace' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'bio' => 'required|string|max:1000',
        ]);
    
        $user = Auth::user();

        // Isi data profil berdasarkan input yang dikirim dari form
        $user->phone = $request->input('phone');
        $user->occupation = $request->input('occupation');
        $user->workplace = $request->input('workplace');
        $user->birthplace = $request->input('birthplace');
        $user->birthdate = $request->input('birthdate');
        $user->bio = $request->input('bio');

        // Simpan perubahan pada profile
        $user->save();
    
        return redirect()->route('profile.view')->with('success', 'Profile updated successfully!');
    }
    public function view()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('dashboard.profile', compact('profile'));
    }

}

