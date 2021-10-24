@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Edit Materi</h1>
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
    <form method="post" action="/dashboard/courses/{{ $course->slug }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title',$course->title) }}">
          @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug',$course->slug) }}">
            @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>
        <div class="mb-3">
            <label for="body" class="form-label">Isi</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="content" required value="{{ old('body',$course->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/courses/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>

@endsection
