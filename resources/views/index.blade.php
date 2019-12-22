@extends('layouts/main')

@section('title', 'Tabel Data Mahasiswa')

@section('container')
<div class="container" style="margin-top:20px">
    <div class="col-6">
        <h2>Daftar Mahasiswa</h2>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif 
        <ul class="list-group">
            @foreach ($students as $data)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$data->nama}}
                <a href="/{{ $data->id }}" class="badge badge-info">detail</a>
            </li>             
            @endforeach
        </ul>
    </div>
</div>
@endsection
