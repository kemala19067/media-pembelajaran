@extends('layouts.page')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<!DOCTYPE html>
<html>
<head>
<title>
detail</title></head>
<h1 class="h2">Lihat File Materi</h1>

<a class="btn btn-primary" href="{{ url('/dashboard/filecourses')}}">Kembali</a>

<br></br>


<h4 >{{$data->name}}<h4>
<h6>{{$data->description}}</h6>

<p>
    <center>
        <iframe src="{{url('storage/'.$data->file)}}" style="width: 600px; height: 500px; "></iframe>
    </center>
</p></html>

@endsection