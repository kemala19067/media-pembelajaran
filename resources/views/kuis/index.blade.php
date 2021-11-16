@extends('layouts.main')

@section('container')
<center>
    <h3>TOPIK KUIS PEMBELAJARAN TIK</h3>
    </center>
    
    
    <a href="/soalkuis" class="btn btn-primary"style="float: right;">Lihat Kuis</a>
    <br></br>
    </span>
    <center>
    @foreach ($kuisis as $kuis)
    <article class="mb-5">
        <div class="row mt-5">
            <div class="col-sm-15">
              <div class="card">
                <div class="card-body">
                <span align="left">
                <h3>Kuis {{ $loop->iteration }}</h3>
                </span>
                  <h5 class="card-title">{{ $kuis->title }}</h5>
                  <p class="card-text">{{ $kuis->body }}</p>
              
                </div>
              </div>
            </div>
        </div>
    </article>
    @endforeach

</center>
@endsection
