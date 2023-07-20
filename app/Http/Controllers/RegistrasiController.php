<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    
    public function profile()
    {
        return view('dashboard.create-profile');
    }

    public function dokter()
    {
        return view('dashboard.add-dokter');
    }

    public function notes()
    {
        return view('dashboard.create-notes');
    }

    public function jadwal()
    {
        return view('dashboard.create-jadwal');
    }

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
