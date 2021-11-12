
@extends('layouts.main')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h2 class="">KUMPULAN FILE PEMBELAJARAN TEKNOLOGI INFORMASI & KOMUNIKASI</h2>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <center>
<img src="https://www.nicepng.com/png/full/4-46142_open-book-free-vector-png-pic-open-book.png" alt="" width="520" height="350">
</center>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    
                </div>
            
                    <span data-feather="calendar"></span>
                </button>
            </div>
        </div>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success col-md-9 ms-sm-auto col-lg-10 px-md-4" role="alert">
        {{ session('success') }}
      </div>
    @endif
    {{-- <div class="table-responsive col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
    <br></br> --}}

    <div class="table-responsive col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
        <table class="table table-striped table-sm pt-3 pb-2 mb-3">
          <thead>
              <tr>
                  <th>Nama File</th>
                  <th>Deskripsi</th>
                 
                  <th>Lihat</th>
                  <th>Download</th>
                  
              </tr>
          </thead>
          <tbody>
              @foreach($data as $data)
              <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->description}}</td>
               
                  <td><a href="/file/{{$data->id}}">Lihat</a</td>
                  <td><a href="/file/{{$data->file}}">Download</a></td>
                  
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>


@endsection
