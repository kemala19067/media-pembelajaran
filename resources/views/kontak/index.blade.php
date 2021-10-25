@extends('layouts.mainlogin')

@section('container')

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex p-3 mx-auto flex-column mb-5">
        <div class="nav-bar">
          <h3 class="float-md-start mb-0">Belajar Asik</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" aria-current="page" href="\cover">Beranda</a>
            <a class="nav-link " href="\about">Tentang</a>
            <a class="nav-link active" href="\kontak">Kontak</a>
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

<div class="hero" id="home">
            <div class="container-fluid">

            

<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success')}}
                    </div>
                @endif
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        <form action="add" method="post" >
                        @csrf
                            <div class="contact-form">
                            
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" data-validation-required-message="Masukkan email ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subjek" required="required" data-validation-required-message="Masukkan subjek ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Pesan" required="required" data-validation-required-message="tuliskan Pesan ..."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" name="sendMessageButton">Kirim</button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>zsx

	@endsection
