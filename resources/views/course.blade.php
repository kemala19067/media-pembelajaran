@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $course->title }}</h2>
        {!! $course->body !!}
    </article>
    <a href="/courses" class="btn btn-primary">Back</a>
@endsection
