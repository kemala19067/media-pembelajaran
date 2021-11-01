@extends('layouts.main')

@section('container')
    <h3>Topik Untuk Kuis Pembelajaran TIK</h3>
    <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kuis Informatika dan Keterampilan Generik</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="/kuis" class="btn btn-primary">Lihat Kuis</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kuis Sistem Komputer</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="/kuis" class="btn btn-primary">Lihat Kuis</a>
            </div>
          </div>
        </div>
      </div>

@endsection
