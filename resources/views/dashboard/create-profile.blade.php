@extends('layouts.front')
@section('title', 'Page Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9">
            <section class="mb-70">
              <div class="container">
                <div class="profile-form">
                  <h2>Create Profile</h2>
                  <form action="{{ route('profile.storeOrUpdate') }}" method="POST">
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
                      <input type="tel" class="form-control" id="phone" name="phone">
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
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                  </form>
                </div>
              </div>
            </section>
        </div>
    </div>
</div>
@endsection
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('css/profile.css') }}">
    <title>MindHealthy - Profile</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-1 sidebar">
        <div class="sidebar-header">
        <a href="#"><img src="{{ asset('images/logo.svg') }}"></a>
        </div>
        <ul class="sidebar-menu">
          <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
          <li><a href="{{ route('dashboard.create-profile') }}">Profile</a></li>
          <li><a href="{{ route('dashboard.create-jadwal') }}">Jadwal</a></li>
          <li><a href="{{ route('dashboard.add-dokter') }}">Dokter</a></li>
          <li><a href="{{ route('dashboard.create-notes') }}">Notes</a></li>
        </ul>
      </div>
      <div class="col-md-10">
      <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        
      </div>
    </div>
  </div>
        
      </div>
    </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> -->