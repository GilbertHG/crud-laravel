@extends('layouts/main')

@section('title', 'Tabel Data Mahasiswa')

@section('container')
<div class="container" style="margin-top:20px">
    <h2>Daftar Mahasiswa</h2>    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAMA</th>
                <th scope="col">NIM</th>
                <th scope="col">TEMPAT TANGGAL LAHIR</th>
                <th scope="col">EMAIL</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $data)
            <tr>
                <th scope="row">{{$loop->iteration}} </th>
            <td>{{$data->nama}}</td>
                <td>{{$data->nim}}</td>
            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                <td>{{$data->email}}</td>
                <td>
                <a href="#" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                <a href="#" class="badge badge-danger"><i class="fa fa-eraser"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
