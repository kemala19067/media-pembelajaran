<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 5.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-light sticky-top bg-info flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">E-Learning TIK</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/"><i class="bi bi-box-arrow-right"></i>Keluar</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-5" style="padding: 30px">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              Dashboard Admin
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-person"></i>Pengguna</a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item {{ Request::is('dashboard/pengguna/user*') ? 'active' : '' }}" href="/dashboard/pengguna/user">User</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/courses*') ? 'active' : '' }}" href="/dashboard/courses">
              <i class="bi bi-files"></i> Materi
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-calendar2-x"></i> Kuis</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item {{ Request::is('/dashboard/kuis/topik*') ? 'active' : '' }}" href="/dashboard/kuis/topik">Topik</a></li>
              <li><a class="dropdown-item" href="#">Pertanyaan</a></li>
              <li><a class="dropdown-item" href="#">Opsi Jawaban</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-calendar2-x"></i> Kuis
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/forum*') ? 'active' : '' }}" href="/dashboard/forum">
              <i class="bi bi-chat-left-text"></i> Forum
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pesan*') ? 'active' : '' }}" href="/dashboard/pesan">
              <i class="bi bi-chat-left-text"></i> Data Pesan
            </a>
          </li>
    </nav>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
