@extends('layout.aplikasi')

@section('konten')
    <form method="POST" action="/siswa" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nomor_induk" class="form-label">Nomor Induk</label>
            <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Isikan nomor induk"
            value="{{ Session::get('nomor_induk') }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Isikan nama"
            value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat">{{ Session::get('nama') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="/siswa" class="btn btn-secondary">Back</a>
        </div>
    </form>

@endsection