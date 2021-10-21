@extends('layouts.mainlogin')

@section('container')

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex p-3 mx-auto flex-column mb-5">
        <div class="nav-bar">
          <h3 class="float-md-start mb-0">Belajar Asik</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" aria-current="page" href="\cover">Beranda</a>
            <a class="nav-link active" href="\about">Tentang</a>
            <a class="nav-link" href="\kontak">Kontak</a>
          </nav>
        </div>
    </div>

    <main>
        <h3>Kontak</h3>
		<p>Dengan senang hati menerima dan merespon kebutuhan kalian</p>

		<div class="contact-info">
        <div class="card">
        <i class="bi bi-envelope" style="color: black"></i>

			<i class="icon" style="color: black"><small>Email</small></i>
            <div class="card-content" style="color: black">
                <h3>Email</h3>
                <span>belajartik@gmail.com</span>
            </div>
        </div>

        <div class="card">
        <i class="bi bi-telephone" style="color: black"></i>
            <i class="icon" style="color: black"><small>Telepon</small></i>
            <div class="card-content" style="color: black">
                <h3>Telepon</h3>
                <span>+6282111222333</span>
            </div>
        </div>

        <div class="card">
        <i class="bi bi-geo-alt" style="color: black"></i>
            <i class="icon" style="color: black"><small>Lokasi</small></i>
            <div class="card-content" style="color: black">
                <h3>Lokasi</h3>
                <span>Surabaya</span>
            </div>
        </div>
    </div>
    </main>
</body>


	@endsection
