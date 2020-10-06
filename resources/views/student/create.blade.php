@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')
    <div class="container">
    <h1>Tambah Data Students</h1>

        <div class="row">
            <div class="col-6">
            <form method="post" action="/student">
            @csrf
            
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required>
            <label for="npm">NPM</label>
            <input type="text" class="form-control" id="npm" placeholder="NPM" name="npm" required>
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="Kelas" name="kelas" required>
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Jurusan" name="jurusan" required>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
