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
      
    </p>
  </main>
  @if(Route::has('login'))
    @auth
    @if(Auth::user()->role ==='ADM')
      <li class="menu-item menu-item-has-children parent">
      <a title="my account" href="#">My Account ({{Auth::user()->name}})
      <ul class="submenu curency">
      <li class="menu-item">
      
      <form method="POST" action="{{ route('logout') }}">
      <a href="{{ route('logout') }}">Logout</a>
      <a title="Dashboard" href="{{ route('admin.dashboard') }}" onclick="event.preventDefault(); .closest('form').submit();">Dashboard</a>
      </li>
      </form>
s
      </ul>
      </li>
    @else
    <li class="menu-item menu-item-has-children parent">
      <a title="my account" href="#">My Account ({{Auth::user()->name}})
      <ul class="submenu curency">
      <li class="menu-item">
      <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
      </li>
      </ul>
      </li>
    @endif
    
    @else
    <a href="{{route('login')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Masuk</a>
      <a href="{{route('register')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Daftar</a>

  @endif
  <footer class="mt-auto text-white-50 bg-info">

  </footer>
</div>



  </body>
</html>
@endsection
