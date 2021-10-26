@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Data Pengguna </h1>
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
<table>
<tr>
    <td>Nama</td>
    <td><input type="text" name="name"></td>
    </tr>


    <tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
    </tr>

    <tr>
    <td>Password</td>
    <td><input type="text" name="password"></td>
    
    </tr>


    <tr>
    <td>Role</td>
    <td><input type="text" name="role"></td>
    </tr>

    <tr>
    <td>
    Email     </td>
    <td><input type="text" name="email"></td>
    <button class="btn btn-info" type="submit">SIMPAN</button> <br></br>
    </tr>

    
</form>
@endsection