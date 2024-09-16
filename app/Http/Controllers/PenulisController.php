<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenulisController extends Controller
{
    public function indexDaftarPenulis()
    {
        return view('page/daftar-penulis/daftarPenulisIndex');
    }

    public function tambahPenulis()
    {
        return view('page/daftar-penulis/tambahPenulis');
    }

    public function createPenulis(Request $req)
    {
        $req->validate([
            'nama_penulis' => 'required|string',
        ], [
            'nama_penulis.required' => 'Nama penulis harus diisi.',
            'nama_penulis.string' => 'Nama penulis harus berupa string.',
        ]);

        try {
            DB::beginTransaction();

            $data = [
                'nama_penulis' => $req->nama_penulis,
                'deskripsi_penulis' => $req->deskripsi_penulis,
                'created_at' => now()
            ];
            DB::table('m_penulis')->insert($data);

            DB::commit();
            return redirect('/daftar-penulis')->with('success', 'Penulis berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/daftar-penulis')->with('error', 'Terjadi kesalahan saat menambahkan penulis: ' . $e->getMessage());
        }
    }
}
