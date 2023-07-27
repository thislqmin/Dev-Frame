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
                    <h2>Edit Notes Konsultasi</h2>
                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="day">Hari Ke</label>
                            <input type="number" class="form-control" id="day" name="day" value="{{ $note->day }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Catatan</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ $note->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="complaint">Keluhan</label>
                            <textarea class="form-control" id="complaint" name="complaint" rows="3">{{ $note->complaint }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
