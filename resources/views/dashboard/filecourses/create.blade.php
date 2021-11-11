@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Tambah file </h1>
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
    <form method="post" action="{{ url('/dashboard/filecourses') }}">
    @csrf
    <p> Tambah Data file </p>
    <div class="mb-3">
    
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('descriptione') is-invalid @enderror" id="description" name="description" required autofocus value="{{ old('description') }}">
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">file</label>
        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" required autofocus value="{{ old('file') }}">
        @error('file')
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
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="file" name="file"></td>
        </tr>
        
        <button class="btn btn-info" type="submit">SIMPAN</button> <br></br>
    </table> --}}
    </form>
</div>
@endsection
