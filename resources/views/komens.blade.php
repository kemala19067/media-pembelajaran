@extends('layouts.main')

@section('container')

@foreach ($forums as $forum)

<article class="mb-5">
    <div class="row">
        <div class="card" style="width: 600px; float: left;">
            <div class="card-body">
                <h5 class="card-title">{{ $forum->title }}</h5>
                <p class="card-text">{{ $forum->content }}</p>
             
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    @endif
    <form action="/komen/{{ $forum->slug }}" method="POST">
        @csrf
        <div class="card" style="width: 550px; float: center;">
            <div class="card-body">
                <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." id="komen">
                </div> -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Komentar</label>
                    <input type="text" class="form-control" placeholder="masukkan komentar..." id="komen">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
               
            </div>
        </div>
    </div>
    
</article>
<center>
  
    </center>
    
   <br></br>
@endforeach

    
@endsection


