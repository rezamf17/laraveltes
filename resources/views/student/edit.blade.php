@extends('layout/main')

@section('title', 'Edit Data Data')

@section('container')
    <div class="container">
    <h1>Edit Data Students</h1>

        <div class="row">
            <div class="col-6">
            <form method="post" action="/student/{{$student->id}}">
            @method('patch')
            @csrf
            
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required value="{{$student->nama}}">
            <label for="npm">NPM</label>
            <input type="text" class="form-control" id="npm" placeholder="Masukan NPM" name="npm" required value="{{$student->npm}}">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas" required value="{{$student->kelas}}">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" required value="{{$student->jurusan}}">
        </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
            </div>
        </div>
    </div>
@endsection
