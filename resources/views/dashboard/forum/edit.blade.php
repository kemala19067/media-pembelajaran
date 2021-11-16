@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data Forum</h1>
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
<form method="post" action="{{ url('/dashboard/forum/'.$model->forum) }}">
@csrf



    <input type="hidden" name="id" value="{{$model->id}}">
    <div class="mb-3">
          <label for="title" class="form-label">Nama Forum</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $model->title }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Konten</label>
          <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="{{ $model->content}}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
    <!-- Nama Forum        : <input type="text" name="title" value="{{ $model->title }}"><br></br>
    Konten    : <input type="text" name="content" value="{{ $model->content }}"><br></br> -->
    
    <button class="btn btn-info" type="submit">SIMPAN</button>
</form>
@method('PATCH')
@endsection