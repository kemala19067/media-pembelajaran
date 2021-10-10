@extends('layouts.page')
@section('container')

<header>
<link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Belajar Asik</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="\cover">Beranda</a>
        <a class="nav-link" href="\about">Tentang</a>
        <a class="nav-link active" href="#">Kontak</a>
      </nav>
    </div>
  </header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
 
      </button>
    </div>
  </div>
</header>

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
    </div>
    </section>
	
	

    </body>
    </html>
	@endsection