@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Tambah Topik Baru</h1>
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
    <form method="post" action="{{ url('/dashboard/kuis/topik') }}">
        @csrf
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
            <label for="body" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" name="body" required value="{{ old('body') }}">
            @error('body')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    <script>
        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // })

        const title = document.querySelector('#title');

    </script>

@endsection
