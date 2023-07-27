<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function landing()
    {
        return view('pages.landing');
    }
    
     public function index()
    {
        //
        return view('regis.signin');
    }
    
    public function signup()
    {
        return view('regis.signup');
    }

    public function signin()
    {
        return view('regis.signin');
    }
    
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function dokter()
    {
        $doctors = Doctor::all();
        return view('dashboard.add-dokter', compact('doctors'));
    }

    public function notes()
    {
        return view('dashboard.create-notes');
    }

    // public function jadwal($doctorId)
    // {
    //     $user = Auth::user();
    //     $doctor = Doctor::findOrFail($doctorId);

    //     $schedules = Schedule::where('doctor_id', $doctorId)
    //         ->where('user_id', $user->id)
    //         ->get();

    //     return view('dashboard.create-jadwal', compact('doctor', 'schedules'));
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
