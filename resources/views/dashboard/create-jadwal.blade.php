@extends('layouts.front')
@section('title', 'Page Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 pt-5">
            <section class="header mb-70">
                <div class="container">
                    <h2>Pilih Jadwal Konsultasi</h2>
                    <p>Dokter: {{ $doctor->name }}</p>
                    <form action="{{ route('schedules.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                        <div class="form-group">
                            <label for="date">Tanggal Konsultasi</label>
                            <input type="text" class="form-control datepicker" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="time">Waktu Konsultasi</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Pilih</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
