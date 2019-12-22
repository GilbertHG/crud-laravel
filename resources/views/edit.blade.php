@extends('layouts/main')

@section('title', 'Tambah Data')
    
@section('container')
<div class="container" style="margin-top:20px">
    <h2 style="margin-bottom:40px">Ubah Data</h2>
<form action="/{{$student->id}}" method="post">
    @method('patch')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">NIM</label>
                <input type="text " class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan nim..." name="nim" value={{$student->nim}} >
                @error('nim')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Nama</label>
                <input type="text" class="form-control  @error('nama') is-invalid @enderror" placeholder="Masukkan nama..." name="nama" value={{$student->nama}} >
                @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Masukkan email..." name="email" value={{$student->email}}>
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Tempat Lahir</label>
                <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan tempat lahir..." name="tempat_lahir" value={{$student->tempat_lahir}}>
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Tanggal lahir</label>
                <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value={{$student->tanggal_lahir}} >
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
</div>
@endsection


