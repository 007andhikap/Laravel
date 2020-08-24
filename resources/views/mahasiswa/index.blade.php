@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                <tbody>
                @foreach($mahasiswa as $mhs)
                <tr>
                <th scope="row">{{ $loop ->iteration }}</th>
                <td>{{ $mhs ->nama }}</td>
                <td>{{ $mhs ->nik }}</td>
                <td>{{ $mhs ->email }}</td>
                <td>{{ $mhs ->jurusan }}</td>
                <td>
                <a hred="" class="badge badge-success ">edit</a>
                <a hred="" class="badge badge-danger ">delate</a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection