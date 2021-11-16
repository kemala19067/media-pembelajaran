@extends('layouts.main')

@section('container')
    <article>
        <h4>{{ $forum->title }}</h4>
        <p>{{ $forum->content }}</p>
    </article>

    <h5>Tambahkan Komentar</h5>
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    @endif
    <form action="/komen/{{ $forum->slug }}" method="POST">
        @csrf
        <div class="card" style="width: 550px; float: center;">
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." id="komen">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Komentar</label>
                    <input type="text" class="form-control" placeholder="masukkan komentar..." id="komen">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <a href="/komens" class="btn btn-primary mt-3">Back</a>
@endsection
