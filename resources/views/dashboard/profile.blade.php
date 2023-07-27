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
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="mb-4">My Profile</h2>

                            <div>
                                <h3>Nama: {{ Auth::user()->name }}</h3>
                                <p>Email: {{ Auth::user()->email }}</p>
                                
                                @if (Auth::user()->phone || Auth::user()->occupation || Auth::user()->workplace || Auth::user()->birthplace || Auth::user()->birthdate || Auth::user()->bio)
                                    <p>Phone: {{ Auth::user()->phone }}</p>
                                    <p>Occupation: {{ Auth::user()->occupation }}</p>
                                    <p>Workplace: {{ Auth::user()->workplace }}</p>
                                    <p>Birthplace: {{ Auth::user()->birthplace }}</p>
                                    <p>Birthdate: {{ Carbon::parse(Auth::user()->birthdate)->format('d M Y') }}</p>
                                    <p>Biodata: {{ Auth::user()->bio }}</p>
                                @else
                                    <p>Data profil belum terisi.</p>
                                @endif
                            </div>

                            <a class="btn btn-sm btn-primary" href="{{ route('dashboard.create-profile') }}">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
