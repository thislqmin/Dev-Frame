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
                    <h2>Pilih Dokter</h2>
                    <div class="row">
                        @foreach($doctors as $doctor)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $doctor->name }}</h5>
                                    <p class="card-text">{{ $doctor->specialization }}</p>
                                    <a href="{{ route('dashboard.create-jadwal', $doctor->id) }}" class="btn btn-primary">Pilih</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
