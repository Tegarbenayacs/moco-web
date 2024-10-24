<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::with('buku')->get();
        return response()->json([
            'datapeminjaman' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id', // Perbaiki 'exist' menjadi 'exists'
            'nama_peminjam' => 'required|string',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        Peminjaman::create([
            'buku_id' => $request->buku_id, 
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return response()->json([
            'pesan' => "Peminjaman berhasil ditambahkan"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = Peminjaman::with('buku')->where('id', $id)->first(); // Mengambil data buku yang diperlukan
        return response()->json([
            'data' => $peminjaman
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id', // Perbaiki 'exist' menjadi 'exists'
            'nama_peminjam' => 'required|string',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        Peminjaman::where('id', $id)->update([
            'buku_id' => $request->buku_id, // Pastikan menggunakan 'id_buku'
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return response()->json([
            'pesan' => "Peminjaman berhasil diupdate"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peminjaman::where('id', $id)->delete(); // Menghapus berdasarkan 'id'
        return response()->json([
            'pesan' => "Peminjaman berhasil dihapus"
        ], 200);
    }
}
