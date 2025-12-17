<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Aksesoris Komputer'],
            ['nama_kategori' => 'Perangkat Jaringan'],
            ['nama_kategori' => 'Peralatan Kantor'],
            ['nama_kategori' => 'Gaming'],
            ['nama_kategori' => 'Penyimpanan Data'],
            ['nama_kategori' => 'Audio & Video'],
            ['nama_kategori' => 'Peripheral'],
            ['nama_kategori' => 'IT Hardware'],
            ['nama_kategori' => 'Smart Device'],
        ];

        foreach ($data as $item) {
            Kategori::create($item);
        }
    }
}
