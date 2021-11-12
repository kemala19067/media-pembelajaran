@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Data Informasi Website</h1>
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
      
        <table class="table table-striped table-sm pt-3 pb-2 mb-3">
          <thead>
            <tr>
              <th scope="col">Deskripsi Website</th>
              <th scope="col">Profil</th>
           
              
              
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($info as $information)
              <tr>
                <td>{{ $information->about }}</td>
                <td>{{ $information->profile}}</td>
               
              
                <td>
                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        
                    </form>
                </td>
              </tr>

              @endforeach
          </tbody>
        </table>
    </div>

@endsection
