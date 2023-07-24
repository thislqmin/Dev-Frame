<!DOCTYPE html>
<html lang="en">
<head>
<title>MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('css/signup.css') }}">
</head>
<body>

<!-- Form Login -->
<form action="{{ route('signup') }}" method="POST">
@csrf
<div class="container col-5 row g-2">
    <h1 class="sign"><b>Sign Up</b></h1>
    <p class="mt-3 mb-5 in">Sign up with email to continue</p>
    @if ($errors->has('password'))
        <div class="alert alert-danger">
            {{ $errors->first('password') }}
        </div>
    @endif
    <!-- <div class="form col-md">
        <div class="form-floating">
        <input type="text" class="form-control" name="first_name" id="floatingInputGrid" placeholder="Muhammad" value="">
        <label for="floatingInputGrid">First Name</label>
        </div>
    </div>
    <div class="form col-md">
        <div class="form-floating mb-3">
        <input type="ext" class="form-control" name="last_name" id="floatingInputGrid" placeholder="Otto" value="">
        <label for="floatingSelectGrid">Last Name</label>
        </div>
    </div> -->
    <div class="form form-floating mt-2 mb-3">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
        <label for="image"><img src="" alt=""></label>
    </div>
    <div class="form form-floating mt-2 mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
        <label for="image"><img src="" alt=""></label>
    </div>
    <div class="form form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form form-floating mt-2">
        <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Re-type Password</label>
    </div>
    <div>
        <p class="lupa mt-3 mb-4">Forgot Your Password ?</p>
    </div>
    <div class="">
        <button type="submit" id="btn" class="button-login btn ms-auto">Sign Up</button>
    </div>
    <div class="account row mt-3">
        <p class="forgot"><a href="{{ route('regis.signin') }}" style="text-decoration: none">Already have account ? Sign in</a></p>
    </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>