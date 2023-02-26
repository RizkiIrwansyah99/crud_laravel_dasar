<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view('halaman.index');
    }

    function tentang()
    {
        return view('halaman.tentang');
    }

    function kontak()
    {
        $data = [
            'judul' => 'Ini adalah halaman kontak',
            'kontak' => [
                'email' => 'riski.irwan65@gmail.com',
                'facebook' => 'Rizki Irwansyah'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
