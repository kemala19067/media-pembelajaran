
@extends('layouts.main')

@section('container')

    @foreach ($courses as $course)
        <article class="mb-5">

            <div class="card mb-3">
                <img src="https://image.freepik.com/free-photo/gradient-dark-blue-futuristic-digital-grid-background_53876-129728.jpg" class="card-img-top border-bottom" width="100%" height="400px">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->excerpt }}</p>
                    <a href="/courses/{{ $course->slug }}" class="btn btn-primary">Lihat Materi</a>
                </div>
              </div>

        </article>
    @endforeach

@endsection
