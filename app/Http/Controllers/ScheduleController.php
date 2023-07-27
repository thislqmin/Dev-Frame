<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function show($doctorId)
    {
        $user = Auth::user();
        $doctor = Doctor::findOrFail($doctorId);

        $schedules = Schedule::where('doctor_id', $doctorId)
            ->where('user_id', $user->id)
            ->get();

        return view('dashboard.create-jadwal', compact('doctor', 'schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $user = Auth::user();
        $data = $request->only(['doctor_id', 'date', 'time']);
        $data['user_id'] = $user->id;

        Schedule::create($data);

        return redirect()->route('schedule.view', $request->doctor_id)->with('success', 'Jadwal konsultasi berhasil dipilih.');
    }
    public function editSchedule(Schedule $schedule)
    {
        return view('dashboard.edit-jadwal', compact('schedule'));
    }

    public function updateSchedule(Request $request, Schedule $schedule)
    {
        // Validasi input jika diperlukan
        $schedule->update($request->all());

        return redirect()->route('schedule.view')->with('success', 'Jadwal berhasil diperbarui!');
    }
    public function viewSchedule()
    {
        $user = Auth::user();
        return view('dashboard.index-jadwal', compact('user'));
    }

    public function deleteSchedule(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.view')->with('success', 'Jadwal berhasil dihapus!');
    }
}
