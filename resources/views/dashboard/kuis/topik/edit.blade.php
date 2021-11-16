@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Topik</h1>
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
    <form method="post" action="{{ url('/dashboard/kuis/topik/'.$model->kuis) }}">
        
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nama Kuis</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $model->title }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Deskripsi</label>
          <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" name="body" value="{{ $model->body}}">
          @error('body')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <!-- <div class="mb-3">
        <input type="hidden" name="id" value="{{$model->id }}">
        <div class="mb-3">
        <label for="title" class="form-label">Nama</label>
        <input type="text" name="title" value="{{ $model->title }}"><br></br>
        <label for="body" class="form-label">Username</label>
        <input type="text" name="body" value="{{ $model->body }}"><br></br> -->
          
        <button class="btn btn-info" type="submit">SIMPAN</button>
</form>

@endsection