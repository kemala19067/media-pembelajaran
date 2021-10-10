@extends('layouts.page')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
    <main class="form-signin">
  <form action="/register" method="post">
  @csrf
  <center><h2>DAFTAR</h2></center>
    
    <center>
    <img class="mb-3" src="https://image.freepik.com/free-vector/mobile-login-concept-illustration_114360-135.jpg" alt="" width="300" height="230">
    </center>
    <div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Nama" required value="{{old('nama')}}">
      <label for="name">Nama</label>
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="text" name="username" class="form-control rounded-top @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{old('username')}}">
      <label for="username">Nama Pengguna</label>
      @error('username')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control rounded-top @error('email')is-invalid @enderror" id="email" placeholder="nama@contoh.com" required value="{{old('email')}}">
      <label for="email">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-top @error('password')is-invalid @enderror" id="password" placeholder="Kata Sandi" required >
      <label for="password">Kata Sandi</label>
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

   
    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    
  </form>
    <small class="d-block mt-3">Sudah punya akun? <a href="/login">Masuk</a></small>
    <small class="d-block mt-3"><a href="/cover">Kembali</a></small>
</main>
    </div>
</div>



@endsection