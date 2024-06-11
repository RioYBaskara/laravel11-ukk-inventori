<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class ApiKatControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return response()->json(['data' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
        ]);

        try {
            $kategori = Kategori::create($request->all());
            return response()->json(['data' => $kategori], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'Gagal menambahkan kategori'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::find($id);

        if(is_null($kategori)){
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        return response()->json(['data' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::find($id);

        if (is_null($kategori)) {
            return response()->json(['status' => 'Kategori tidak ditemukan'], 404);
        }

        try {
            $kategori->update($request->all());
            return response()->json(['status' => 'Kategori berhasil diubah'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'Gagal mengubah kategori'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);

        if (is_null($kategori)) {
            return response()->json(['status' => 'Kategori tidak ditemukan'], 404);
        }

        try {
            $kategori->delete();
            return response()->json(['status' => 'Kategori berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'Kategori tidak dapat dihapus'], 500);
        }
    }

}
