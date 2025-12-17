<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama' => 'Andi Saputra', 'alamat' => 'Semarang'],
            ['nama' => 'Budi Santoso', 'alamat' => 'Jakarta'],
            ['nama' => 'Citra Lestari', 'alamat' => 'Bandung'],
            ['nama' => 'Dewi Anggraini', 'alamat' => 'Yogyakarta'],
            ['nama' => 'Eko Prasetyo', 'alamat' => 'Surabaya'],
            ['nama' => 'Fajar Hidayat', 'alamat' => 'Solo'],
            ['nama' => 'Gina Permata', 'alamat' => 'Malang'],
            ['nama' => 'Hadi Kurniawan', 'alamat' => 'Purwokerto'],
            ['nama' => 'Intan Maharani', 'alamat' => 'Magelang'],
            ['nama' => 'Joko Widodo', 'alamat' => 'Solo'],
        ];

        foreach ($data as $item) {
            Pelanggan::create($item);
        }
    }
}
