@extends('layout/main')

@section('title', 'Data Students')

@section('container')
    <div class="container">
    <a href="student/create" class="btn btn-primary my-3">Tambah Data</a> <br>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="row">
            <div class="col-6">
            <ul class="list-group">
            @foreach($student as $std)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$std->nama}}
                <a href="/student/{{$std->id}}" class="badge badge-info">Detail</a>
            </li>
            @endforeach
            </ul>
            </div>
        </div>
    </div>
@endsection
