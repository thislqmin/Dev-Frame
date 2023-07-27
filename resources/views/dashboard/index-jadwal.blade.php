@php
use Carbon\Carbon;
@endphp
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
                <h2>Jadwal Konsultasi</h2>
                @if ($user->schedules->count() > 0)
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Jadwal Konsultasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->schedules as $index => $schedule)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $schedule->doctor->name }}</td>
                            <td>{{ Carbon::parse($schedule->date)->format('d M Y') }} | {{ Carbon::parse($schedule->time)->format('H:i') }}</td>
                            <td>
                                <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('schedule.delete', $schedule->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>Belum ada jadwal konsultasi yang dipilih.</p>
                @endif
            </div>
            </section>
        </div>
    </div>
</div>
@endsection