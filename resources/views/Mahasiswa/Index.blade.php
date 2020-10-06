@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Daftar Mahasiswa</h1>
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$mhs->id_mahasiswa}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->npm}}</td>
                        <td>{{$mhs->kelas}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
