@extends('layouts.mainlogin')

@section('container')

  <body class="d-flex h-100 text-center text-black bg-info">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">E-Learning TIK</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" href="\cover">Beranda</a>
        <a class="nav-link" href="\about">Tentang</a>
        <a class="nav-link" href="\kontak">Kontak</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Halo, Selamat Datang !!!</h1>
    <p class="lead">Mari belajar asik belajar bersama</p>
    <p class="lead">
      <a href="\login" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Masuk</a>
      <a href="\register" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Daftar</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50 bg-info">

  </footer>
</div>



  </body>
</html>
@endsection
