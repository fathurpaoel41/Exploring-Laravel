<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ApiPenulisController extends Controller
{
    public function getAllPenulis(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $perPage = 3; // You can adjust this number as needed

            $cacheKey = 'penulis_page_' . $page;

            $data = Cache::remember($cacheKey, 60, function () use ($perPage) {
                return DB::table('m_penulis')->paginate($perPage);
            });

            return response()->json([
                'data' => $data,
                'message' => 'Berhasil mengambil data penulis',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal mengambil data penulis',
                'status' => false
            ], 500);
        }
    }
}
