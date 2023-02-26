@extends('layout.aplikasi')

@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae eius distinctio culpa. Architecto vitae voluptate in ab a magnam eos.</p>
<p>
    <ul>
        <li>Email: {{ $kontak['email'] }}</li>
        <li>Facebook: {{ $kontak['facebook'] }}</li>
    </ul>
</p>
@endsection
    