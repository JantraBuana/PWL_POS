<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 150000,
                'harga_jual' => 250000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Pensil',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
        ];
    }
}
