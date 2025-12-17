<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    // CREATE
    public function create(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string',
            'alamat' => 'required|string',
        ]);

        return Pelanggan::create($data);
    }

    // READ ALL
    public function read()
    {
        return Pelanggan::all();
    }

    // READ BY ID
    public function readById($id)
    {
        return Pelanggan::findOrFail($id);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'   => 'required|string',
            'alamat' => 'required|string',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($data);

        return $pelanggan;
    }

    // DELETE
    public function delete($id)
    {
        Pelanggan::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Pelanggan berhasil dihapus'
        ]);
    }
}
