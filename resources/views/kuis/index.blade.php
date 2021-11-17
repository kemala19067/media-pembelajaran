@extends('layouts.main')

@section('container')
<center>
    <h3>TOPIK KUIS PEMBELAJARAN TIK</h3>
    </center>
    
    <center>
    <img src="https://cdni.iconscout.com/illustration/premium/thumb/many-peoples-thinking-and-one-man-sitting-on-question-mark-2739229-2280832.png" alt="" width="520" height="350">
</center>
  
   
    <article class="mb-10">
        <center>
                  <a href="/kuis" class="btn btn-primary" >Kuis 1</a> 
                
                  <a href="/kuis2" class="btn btn-primary">Kuis2</a>
                
                  <a href="/kuis3" class="btn btn-primary">Kuis 3</a>
                  
                  <a href="/kuis4" class="btn btn-primary">Kuis 4</a>
                  
              
                  
</center>
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
