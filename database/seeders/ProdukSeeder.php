<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_produk' => 'Laptop Asus Vivobook', 'harga' => 8500000],
            ['nama_produk' => 'Mouse Logitech M185', 'harga' => 150000],
            ['nama_produk' => 'Keyboard Mechanical', 'harga' => 450000],
            ['nama_produk' => 'Monitor Samsung 24 Inch', 'harga' => 2100000],
            ['nama_produk' => 'Flashdisk Sandisk 32GB', 'harga' => 75000],
            ['nama_produk' => 'Harddisk Eksternal 1TB', 'harga' => 850000],
            ['nama_produk' => 'Headset Gaming', 'harga' => 320000],
            ['nama_produk' => 'Webcam Logitech C270', 'harga' => 420000],
            ['nama_produk' => 'Printer Epson L3210', 'harga' => 2300000],
            ['nama_produk' => 'Router TP-Link Archer', 'harga' => 480000],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}
