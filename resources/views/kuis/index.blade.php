@extends('layouts.main')

@section('container')
    <h3>Topik Untuk Kuis Pembelajaran TIK</h3>

    @foreach ($kuisis as $kuis)
    <article class="mb-5">
        <div class="row mt-5">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $kuis->title }}</h5>
                  <p class="card-text">{{ $kuis->body }}</p>
                  <a href="/kuis" class="btn btn-primary">Lihat Kuis</a>
                </div>
              </div>
            </div>
        </div>
    </article>
    @endforeach


@endsection
