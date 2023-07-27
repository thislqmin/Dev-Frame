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
                <h2>Catatan Harian</h2>
                <a href="{{ route('notes.create') }}" class="btn btn-primary">Tambah Catatan</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Hari Ke</th>
                            <th>Isi Catatan</th>
                            <th>Keluhan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notes as $note)
                        <tr>
                            <td>{{ $note->day }}</td>
                            <td>{{ $note->content }}</td>
                            <td>{{ $note->complaint }}</td>
                            <td>
                                <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus catatan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </section>
        </div>
    </div>
</div>
@endsection
