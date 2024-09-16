<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function indexDaftarBuku(){
        return view('page/daftar-buku/daftarBukuIndex');
    }

    public function tambahBuku(){
        return view ('page/daftar-buku/tambahBukuBaru');
    }
}
