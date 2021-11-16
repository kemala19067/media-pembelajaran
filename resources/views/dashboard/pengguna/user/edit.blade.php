@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data Pengguna</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                </button>
            </div>
        </div>
    </div>

    <div class="table-responsive col-md-9 ms-sm-auto col-lg-10 px-md-4">
</br>
<form method="post" action="{{ url('/dashboard/pengguna/user/'.$model->user) }}">
@csrf
<input type="hidden" name="id" value="{{$model->id}}">
<input type="hidden" name="password" value="{{$model->password}}">
<div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $model->name }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

     <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $model->username }}">
          @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ $model->password }}">
          @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="role" class="form-label">Role</label>
          <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" value="{{ $model->role }}">
          @error('role')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $model->email}}">
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <button class="btn btn-info" type="submit">SIMPAN</button>
<!-- <p> Tambah Data Pengguna </p>
    <input type="hidden" name="id" value="{{$model->id}}">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" value="{{ $model->name }}"><br></br>
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" value="{{ $model->username }}"><br></br>
    Password    : <input type="text" name="password" value="{{ $model->password }}"><br></br>
    Role        : <input type="text" name="role" value="{{ $model->role }}"><br></br>
    Email       : <input type="text" name="email" value="{{ $model->email }}"><br></br>

    <button class="btn btn-info" type="submit">SIMPAN</button>
</form> -->

@endsection