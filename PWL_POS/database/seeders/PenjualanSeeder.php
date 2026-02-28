<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //User id 1 Semua total 10
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Nuril',
                'penjualan_kode' => 'PNJ1',
                'penjualan_tanggal' => '2024-06-10',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Dono',
                'penjualan_kode' => 'PNJ2',
                'penjualan_tanggal' => '2024-06-11',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Rizky',
                'penjualan_kode' => 'PNJ3',
                'penjualan_tanggal' => '2024-06-12',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Tono',
                'penjualan_kode' => 'PNJ4',
                'penjualan_tanggal' => '2024-06-13',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PNJ5',
                'penjualan_tanggal' => '2024-06-14',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Dani',
                'penjualan_kode' => 'PNJ6',
                'penjualan_tanggal' => '2024-06-15',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Agus',
                'penjualan_kode' => 'PNJ7',
                'penjualan_tanggal' => '2024-06-16',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Gilang',
                'penjualan_kode' => 'PNJ8',
                'penjualan_tanggal' => '2024-06-17',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'PNJ9',
                'penjualan_tanggal' => '2024-06-18',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Dewa',
                'penjualan_kode' => 'PNJ10',
                'penjualan_tanggal' => '2024-06-19',
            ],

        ];
        DB::table('t_penjualan')->insert($data);
    }
}
