@extends('layouts.front')
@section('title', 'Page Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 pt-5">
          <section class="mb-70">
            <div class="container">
              <div class="profile-form">
                <h2>Create Profile</h2>
                <form action="{{ route('profile.update') }}" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="occupation">Pekerjaan</label>
                    <input type="text" class="form-control" id="occupation" name="occupation">
                  </div>
                  <div class="form-group">
                    <label for="workplace">Asal Tempat Kerja</label>
                    <input type="text" class="form-control" id="workplace" name="workplace">
                  </div>
                  <div class="form-group">
                    <label for="birthplace">Tempat Lahir</label>
                    <input type="text" class="form-control" id="birthplace" name="birthplace">
                  </div>
                  <div class="form-group">
                    <label for="birthdate">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                  </div>
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="5"></textarea>
                  </div>
                  <button type="submit" id="btn" class="btn btn-primary mt-3">Simpan</button>
                </form>
              </div>
            </div>
          </section>
        </div>
    </div>
</div>
@endsection