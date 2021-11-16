@extends('layouts.main')

@section('container')

@foreach ($forums as $forum)
<article class="mb-5">
    <div class="row">
        <div class="card" style="width: 600px; float: left;">
            <div class="card-body">
                <h5 class="card-title">{{ $forum->title }}</h5>
                <p class="card-text">{{ $forum->content }}</p>
                <a href="/komen/{{ $forum->slug }}" class="btn btn-primary">Lihat Komentar</a>
            </div>
        </div>
    </div>
</article>
@endforeach

@endsection
