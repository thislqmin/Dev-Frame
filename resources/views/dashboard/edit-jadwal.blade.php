@php
use Carbon\Carbon;
@endphp
@extends('layouts.front')
@section('title', 'Edit Jadwal Konsultasi')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 pt-5">
            <section class="mb-70">
                <div class="container">
                    <h2>Edit Jadwal Konsultasi</h2>
                    <form action="{{ route('schedule.update', $schedule->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="date">Tanggal Konsultasi</label>
                            <input type="text" class="form-control datepicker" id="date" name="date"
                                value="{{ Carbon::parse($schedule->date)->format('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Jam Konsultasi</label>
                            <input type="time" class="form-control" id="time" name="time"
                                value="{{ Carbon::parse($schedule->time)->format('H:i') }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
