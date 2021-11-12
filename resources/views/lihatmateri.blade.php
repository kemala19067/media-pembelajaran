@extends('layouts.main')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<!DOCTYPE html>
<html>
<head>
<title>
detail</title></head>



<br></br>


<h4 >{{$data->name}}<h4>
<h6>{{$data->description}}</h6>

<p>
    <center>
        <iframe src="{{url('storage/'.$data->file)}}" style="width: 600px; height: 500px; "></iframe>
    </center>
</p></html>

@endsection