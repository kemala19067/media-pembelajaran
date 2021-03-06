@extends('layouts.mainlogin')

@section('container')

<body class="d-flex h-100 text-center text-black bg-info">


<main>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <div class="nav-bar">
      <h3 class="float-md-start mb-0">E-Learning TIK</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="\cover">Beranda</a>
        <a class="nav-link active" href="\about">Tentang</a>
        <a class="nav-link" href="\kontak">Kontak</a>
      </nav>
    </div>
</div>
@foreach($data as $data)
  <section class="py-5 text-center container">
    <div class="row py-lg-8">
      <div class="col-lg-10 col-md-8 mx-auto">
        <h1 class="fw-light">Tentang Website</h1>
        <p class="lead text-muted">{{$data->about}}</p>
  <br></br>
        <h1 class="fw-light">Profil Website</h1>
        <p class="lead text-muted">{{$data->profile}}</p>


      </div>
    </div>
  </section>

  @endforeach

  <div class="album py-5 bg-info">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 1" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#4682B4"/><text x="50%" y="50%" fill="#87CEEB" dy=".3em">Materi</text></svg>

            <div class="card-body" style="color: rgb(255, 255, 255)">
              <p class="card-text">Menyediakam materi mengenai Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>

              </div>
            </div>
          </div>

        </div>
        <div class="col">
          <div class="card shadow-sm" style="color: rgb(255, 255, 255)">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 2" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#4682B4"/><text x="50%" y="50%" fill="#87CEEB" dy=".3em">Kuis</text></svg>

            <div class="card-body" style="color: rgb(255, 255, 255)">
              <p class="card-text">Menyediakan tes pemahaman mengenai Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 3" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#4682B4"/><text x="50%" y="50%" fill="#87CEEB" dy=".3em">Forum</text></svg>

            <div class="card-body" style="color: rgb(255, 255, 255)">
              <p class="card-text">Wadah untuk berdiskusi terkait Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>

              </div>
            </div>
          </div>
        </div>





</main>

<footer class="text-muted py-5 bg-info">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</footer>

</body>


@endsection
