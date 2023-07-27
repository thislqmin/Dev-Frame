<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $doctors = Doctor::all();
        return view('dashboard.add-dokter', compact('doctors'));
    }
}
