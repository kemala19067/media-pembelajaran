@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Pengguna Umum</h1>
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
<form method="post" action="{{ url('/dashboard/pengguna/user') }}">
@csrf

<p> Tambah Data Pengguna </p>
    Nama        : <input type="text" name="name"><br></br>
    Username    : <input type="text" name="username"><br></br>
    Password    : <input type="text" name="password"><br></br>
    Role        : <input type="text" name="role"><br></br>
    Email       : <input type="text" name="email"><br></br>

    <button class="btn btn-info" type="submit">SIMPAN</button>
</form>
@endsection