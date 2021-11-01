@extends('layouts.page')

@section('container')

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Halaman Topik Kuis</h1>
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
        <a href="/dashboard/kuis/topik/create" class="btn btn-primary mb-3">Tambah Topik</a>
        <table class="table table-striped table-sm pt-3 pb-2 mb-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Topik</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              {{-- @foreach ($courses as $course) --}}
              <tr>
                <td>1,001</td>
                <td>random</td>
                {{-- <td>{{ $loop->iteration }}</td>
                <td>{{ $course->title }}</td> --}}
                <td>
                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                    <a href="#" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <button class="badge bg-danger border-0"><i class="bi bi-trash"></i></button>
                    {{-- <form action="#" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus materi?')"><i class="bi bi-trash"></i></button>
                    </form> --}}
                </td>
              </tr>

              {{-- @endforeach --}}
          </tbody>
        </table>
    </div>

@endsection
