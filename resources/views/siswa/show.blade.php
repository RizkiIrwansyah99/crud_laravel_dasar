@extends('layout.aplikasi')

@section('konten')
    <div class="card" style="width:18rem">
        <div class="card-body">
        <h4 class="card-title">{{ $data->nama }}</h4>
        <p class="card-text">Nomor Induk : {{ $data->nomor_induk }}</p>
        <p>Alamat : {{ $data->alamat }}</p>
        <a href="/siswa" class="btn btn-primary">Back</a>
        </div>
    </div>  
@endsection