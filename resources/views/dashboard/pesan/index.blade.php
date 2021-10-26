@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Data Pesan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
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
    <div class="table-responsive col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
    <br></br>
<table class="table-bordered table">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
        <th >Action</th>
        
    </tr>

    @foreach($datas as $key=>$value)
    <tr>
    <td>{{$value->name}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->subject}}</td>
    <td>{{$value->message}}</td>
    
    <td>
                    
                    
                    
    <form action="{{url('/dashboard/pesan/'.$value->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus data?')"><i class="bi bi-trash"></i></button>
                    </form>
                    
                </td>
    
    </tr>

    @endforeach

    </table>









@endsection
