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
      <div class="col-sm sidebar">
        <div class="sidebar-header">
        <a href="#"><img src="{{ asset('images/logo.svg') }}"></a>
        </div>
        <ul class="col-sm sidebar-menu">
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
        <div class="profile-form">

</body>
</html>