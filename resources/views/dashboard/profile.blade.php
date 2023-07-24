@extends('layouts.front')
@section('title', 'Page Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9">
            <section class="header mb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2>Tatanan Profile</h2>

                            <div>
                                <h3>Nama: {{ Auth::user()->name }}</h3>
                                <p>Email: {{ Auth::user()->email }}</p>

                                <!-- Tampilkan data profile yang sudah disimpan -->
                                @if ($profile)
                                    <p>Phone: {{ $profile->phone }}</p>
                                    <p>Occupation: {{ $profile->occupation }}</p>
                                    <p>Workplace: {{ $profile->workplace }}</p>
                                    <p>Birthplace: {{ $profile->birthplace }}</p>
                                    <p>Birthdate: {{ $profile->birthdate }}</p>
                                    <p>Biodata: {{ $profile->biodata }}</p>
                                @else
                                    <p>Belum ada data profile.</p>
                                @endif
                            </div>

                            <a href="{{ route('dashboard.create-profile') }}">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
