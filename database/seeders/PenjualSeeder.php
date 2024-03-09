<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => '2024-03-01 08:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Jane Doe',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => '2024-03-01 09:30:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Alice Smith',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => '2024-03-01 10:45:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Bob Johnson',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => '2024-03-01 12:20:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Eva Green',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => '2024-03-01 14:45:00',
            ],
        ]
    }
}
