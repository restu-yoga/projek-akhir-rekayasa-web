<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create(Request $request)
{
    $data = $request->validate([
        'nama_kategori' => 'required|string'
    ]);

    return Kategori::create($data);
}


    public function read()
    {
        return Kategori::all();
    }

    public function readById($id)
    {
        return Kategori::findOrFail($id);
    }

    public function update(Request $request, $id)
{
    $data = $request->validate([
        'nama_kategori' => 'required|string'
    ]);

    $kategori = Kategori::findOrFail($id);
    $kategori->update($data);

    return $kategori;
}

    public function delete($id)
    {
        Kategori::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Kategori berhasil dihapus'
        ]);
    }
}
