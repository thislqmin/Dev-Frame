<!DOCTYPE html>
<html lang="en">
<head>
    <title> MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
</head>
<body>
  <!-- NAVBAR / HEADER -->
  <nav class="navbar navbar-expand-lg navbar-light mt-3">
    <div class="container">
      <a href="#"><img src="{{ asset('images/logo.svg') }}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-4 my-2">
            <a aria-current="page" href="#">Layanan</a>
          </li>
          <li class="nav-item me-4 my-2">
            <a href="#">Test Psikologi</a>
          </li>
          <li class="nav-item me-4 my-2">
            <a href="#">Blog</a>
          </li>
          <li class="nav-item me-4 my-2">
            <a href="#" tabindex="-1" aria-disabled="true">Tentang Kami</a>
          </li>
        </ul>
        <button type="button" id="btn" class="btn ms-auto"><a href="{{ route('regis.signup') }}" style="text-decoration: none; color: white">Konsultasi Sekarang</a></button>
      </div>
    </div>
  </nav>

  <!-- CONTENT -->
  <div class="d-flex justify-content-between">
    <div class="mulai-kiri align-items-center">
      <h5><b>Ceritakan masalah kamu dengan ahlinya</h5>
      <h3>Selalu ada pagi yang damai <br> setelah malam yang penuh <br> badai. </b></h3>
      <button type="button" class="btn btn-sm mt-4" id="btn"><a href="{{ route('regis.signup') }}" style="text-decoration: none; color: white">Daftar Sekarang</a></button>
      <button type="button" class="btn btn-sm mt-4" id="btn2">Tentang Kami</button>
    </div>
    <div class="">
      <img style="width: 100%;" src="{{ asset('images/ilu1.png') }}" alt="nongki">
    </div>  
  </div>
  <div class="teks container">
    <h4 class="mb-5"><b>MindHealthy ingin membantu anda <br> dalam mengurangi masalah yang <br> anda alami</b></h4>
  </div>

  <!-- CARD -->
  <div class="card container mt-5">
    <div class="row">
      <div class="col-4 text-center">
        <img src="{{ asset('images/card1.png') }}" alt="">
        <h3 class="mt-4">Mental Block</h3>
      </div>
      <div class="col-4 text-center">
        <img src="{{ asset('images/card2.png') }}" alt="">
        <h3 class="mt-4">Anti Sosial</h3>
      </div>
      <div class="col-4 text-center">
        <img src="{{ asset('images/card3.png') }}" alt="">
        <h3 class="mt-4">Depresi</h3>
      </div>
    </div>
  </div>

  <!-- Layanan -->
  <div class="layanan d-flex justify-content-between">
    <div class="layanan-kiri pt-5">
      <img class="mt-2" src="{{ asset('images/ilu3.png') }}">
    </div>
    <div class="layanan-kanan">
      <h1 class="fw-bold">Layanan Lain Kami</h1>
      <p style="width: 85%;">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
      <ul id="accordion">
        <li>
          <input type="radio" name="accordion" id="first" checked>
          <label for="first">
            <h3 class="fw-bold">Mentoring</h3>
            <img class="DD" style="width:16px; height:24px; align-items:center;" src="{{ asset('images/arrowdown.png') }}" alt="">
          </label>
          <div class="content">
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</br>consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            <button type="button" class="btn btn-sm mt-3 mb-4" id="btn">Selengkapnya</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="second">
          <label for="second">
            <h3 class="fw-bold">Konseling</h3>
            <img class="DD" style="width:16px; height:24px; align-items:center;" src="{{ asset('images/arrowdown.png') }}" alt="">
          </label>
          <div class="content">
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</br>consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            <button type="button" class="btn btn-sm mt-3 mb-4" id="btn">Selengkapnya</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="third">
          <label for="third">
            <h3 class="fw-bold">Kelas Online</h3>
            <img class="DD" style="width:16px; height:24px; align-items:center;" src="{{ asset('images/arrowdown.png') }}" alt="">
          </label>
          <div class="content">
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</br>consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            <button type="button" class="btn btn-sm mt-3 mb-4" id="btn">Selengkapnya</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="fourth">
          <label for="fourth">
            <h3 class="fw-bold">Tes Psikologi</h3>
            <img class="DD" style="width:16px; height:24px; align-items:center;" src="{{ asset('images/arrowdown.png') }}" alt="">
          </label>
          <div class="content">
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</br>consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
            <button type="button" class="btn btn-sm mt-3 mb-4" id="btn">Selengkapnya</button>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- Testimoni -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>