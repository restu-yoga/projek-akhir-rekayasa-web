<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function create(Request $request)
    {
        return Produk::create($request->all());
    }

    public function read()
    {
        return Produk::all();
    }
    public function readById($id)
    {
    return Produk::findOrFail($id);
    }
    public function update(Request $request, $id)
{
    $data = $request->json()->all(); // ⬅️ PAKSA AMBIL JSON

    $produk = Produk::findOrFail($id);
    $produk->update($data);

    return $produk;
}

    public function delete($id)
    {
        Produk::findOrFail($id)->delete();
        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}