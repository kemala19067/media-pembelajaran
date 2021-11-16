@extends('layouts.main')

@section('container')
    <div class="card" style="width: 680px;">
        <div class="card-body">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
            @endif
            <h4 class="card-title mb-4">Buat Forum</h4>
            <form action="{{ url('/forum') }}" method="post">
            @csrf
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label" for="selectOne">Forum</label>
                        <input id="title" name="title" class="form-control" placeholder="Nama Forum" rows="4"></input>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" rows="4">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>
                        <input id="content" name="content" class="form-control" placeholder="Konten" rows="4"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </form>
        </div>
    </div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/forum/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection
