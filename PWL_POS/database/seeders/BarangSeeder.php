<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //kategori makanan
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG1',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG2',
                'barang_nama' => 'Sari Roti',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG3',
                'barang_nama' => 'Bolu',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            //kategori minuman
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG4',
                'barang_nama' => 'Teh Botol Sosro',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG5',
                'barang_nama' => 'Aqua',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG6',
                'barang_nama' => 'Coca Cola',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            //kategori snack
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG7',
                'barang_nama' => 'Chitato',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG8',
                'barang_nama' => 'Lays',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BRG9',
                'barang_nama' => 'Taro',
                'harga_beli' => 6000,
                'harga_jual' => 9000,
            ],
            //Kategori alat tulis
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BRG10',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 2000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BRG11',
                'barang_nama' => 'Pensil',
                'harga_beli' => 1000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'BRG12',
                'barang_nama' => 'Penghapus',
                'harga_beli' => 500,
                'harga_jual' => 1500,
            ],
             //Kategori elektronik
             [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'BRG13',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'BRG14',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 3000000,
                'harga_jual' => 4500000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'BRG15',
                'barang_nama' => 'Tablet',
                'harga_beli' => 2000000,
                'harga_jual' => 3500000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
