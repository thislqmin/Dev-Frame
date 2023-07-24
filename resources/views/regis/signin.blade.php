<!DOCTYPE html>
<html lang="en">
<head>
<title>MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('css/signin.css') }}">
</head>
<body>

<!-- Form Login -->
<form action="{{ route('login') }}" method="POST">
  @csrf
  <div class="container">
    <h1 class="sign"><b>Sign In</b></h1>
    <p class="mt-3 mb-5 in">Sign in with email to continue</p>
    @if (session('success'))
        <div class="alert alert-success col-5">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->has('error_message'))
        <div class="alert alert-danger col-5">
            {{ $errors->first('error_message') }}
        </div>
    @endif
    <div class="col-5">
        <div class="form form-floating mb-4">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form form-floating mt-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div>
            <p class="lupa mt-3 mb-4">Forgot Your Password ?</p>
        </div>
        <div class="">
            <button type="submit" id="btn" class="button-login btn ms-auto">Sign In</button>
        </div>
        <div class="container row mt-3">
            <p class="forgot"><a href="{{ route('regis.signup') }}" style="text-decoration: none">Don't have an account ? Sign Up</a></p>
        </div>
    </div>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>