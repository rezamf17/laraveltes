@extends('layout/main')

@section('title', 'Data Students')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h5 class="card-title">{{$student->NPM}}</h5>
                    <h5 class="card-title">{{$student->kelas}}</h5>
                    <h5 class="card-title">{{$student->jurusan}}</h5>

                    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="\student" class="btn btn-success">Kembali</a>
                </div>
    </div>
            </div>
        </div>
    </div>
@endsection
