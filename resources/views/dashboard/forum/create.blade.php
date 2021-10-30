@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Forum </h1>
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
    <form method="post" action="{{ url('/dashboard/forum') }}">
    @csrf
    <p> Tambah Data Forum </p>
    <div class="mb-3">
        <label for="title" class="form-label">Topik</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Konten</label>
        <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" required autofocus value="{{ old('content') }}">
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <button class="btn btn-primary" type="submit">SIMPAN</button>

    {{-- <table>
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
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <button class="btn btn-info" type="submit">SIMPAN</button> <br></br>
    </table> --}}
    </form>
</div>
@endsection
