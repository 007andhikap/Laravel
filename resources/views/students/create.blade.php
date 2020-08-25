@extends('layout/main')

@section('title','Form Add Data Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Add Data Student</h1>
                
                <form method="post" action="/students">
                @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Insert nama" name="nama" value="{{ old('nama') }}">
                            @error ('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Insert nik" name="nik" value="{{ old('nik') }}">
                            @error ('nik')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Insert email" name="email" value="{{ old('email') }}">
                            @error ('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Insert jurusan" name="jurusan" value="{{ old('jurusan') }}">
                            @error ('jurusan')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type ="submit" class ="btn btn-primary">Add Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection