<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return response()->json([
            'databuku' =>$data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string',
            'penulis_buku' => 'required|string',
            'tahun_terbit' => 'required|integer',
        ]);

        Buku::create([
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return response()->json([
            'pesan' => "Buku berhasil ditambahkan"
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $buku=Buku::where('id', $id)->first();
        return response()->json([
            'data' => $buku
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_buku' => 'sometimes|required|string',
            'penulis_buku' => 'sometimes|required|string',
            'tahun_terbit' => 'sometimes|required|integer',
        ]);

        $buku=Buku::where('id', $id)->update([
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku, 
            'tahun_terbit' => $request->tahun_terbit, 
        ]);

        return response()->json([
            'pesan' => "Buku berhasil diubah"
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku=Buku::where('id', $id)->delete();
        return response()->json([
            'pesan' => "Buku berhasil dihapus"
        ], 200);
    }
}
