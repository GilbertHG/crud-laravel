@extends('layouts/main')

@section('title', 'Tabel Data Mahasiswa')

@section('container')
<div class="container" style="margin-top:20px">
    <div class="col-6">
        <h2>Detail Mahasiswa</h2>

        <ul class="list-group">

            <div class="card" style="width: 24rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text mb-1">{{$student->tempat_lahir}}, {{$student->tanggal_lahir}}</p>
                    <p class="card-text">{{$student->email}}</p>
                    <a href="{{$student->id}}/edit" type="submit" class="badge badge-primary">edit</a>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">hapus</button><br>
                    </form>
                <a href="{{url('/')}}" class="card-link">Kembali</a>
                </div>
            </div>

        </ul>
    </div>
</div>
@endsection
