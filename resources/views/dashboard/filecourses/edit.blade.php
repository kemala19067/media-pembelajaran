@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Edit File Materi</h1>
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
    <form method="post" action="{{ url('/dashboard/filecourses/'.$model->file) }}">
        
        @csrf
        <div class="mb-3">
        <input type="hidden" name="id" value="{{$data->id }}">
        <div class="mb-3">
        <label for="name" class="form-label">Nama File</label>
        <input type="text" name="name" value="{{ $data->name }}"><br></br>
        <label for="description" class="form-label">Username</label>
        <input type="text" name="description" value="{{ $data->description }}"><br></br>
        <label for="file" class="form-label">File</label>
        <input type="filr" name="file" value="{{ $data->file }}"><br></br>
          
        <button class="btn btn-info" type="submit">SIMPAN</button>
</form>

@endsection