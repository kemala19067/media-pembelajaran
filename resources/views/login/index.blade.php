@extends('layouts.page')

@section('container')
<body>
  
</body>

<div class="row justify-content-center">
    <div class="col-md-4">

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Pendaftaran berhasil!</strong>Silahkan masuk
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginerror'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Gagal Masuk! </strong>
  {{session('loginerror')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <main class="form-signin">
  <form action="/login" method="post">
  @csrf
  <center><h2>MASUK</h2></center>
    
    <center>
    <img class="mb-3" src="https://image.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg" alt="" width="300" height="230">
    </center>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
      <label for="email">Email</label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control"  id="password" placeholder="Password" required>
      <label for="floatingPassword">Kata Sandi</label>
    </div>

   
    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    
  </form>
    <small class="d-block mt-3">Belum punya akun? <a href="/register">Daftar</a></small>
    <small class="d-block mt-3"><a href="/cover">Kembali</a></small>
</main>
    </div>
</div>



@endsection