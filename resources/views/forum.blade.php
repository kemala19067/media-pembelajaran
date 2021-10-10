@extends('layouts.main')

@section('container')
    <h1><strong>TIK Yuk - Forum</strong></h1>
    <p>Tuliskan masalah Anda saat mengerjakan kuis atau hal-hal yang ingin didiskusikan ke dalam form berikut: </p>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tuliskan pesan Anda..." rows="3"></textarea>
      </div>
@endsection

