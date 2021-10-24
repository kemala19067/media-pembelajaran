@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Materi</h1>
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

    <article class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>{{ $course->title }}</h2>
        <div class="button mb-4 mt-4">
            <a href="/dashboard/courses" class="btn btn-success"><i class="bi bi-arrow-left"></i>Back</a>
            <a href="/dashboard/courses/{{ $course->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
            <form action="/dashboard/courses/{{ $course->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Yakin hapus materi?')"><i class="bi bi-trash">Hapus</i></button>
            </form>
        </div>
        {!! $course->body !!}
    </article>
@endsection
