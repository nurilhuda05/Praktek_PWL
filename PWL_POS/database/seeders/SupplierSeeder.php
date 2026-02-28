<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP1', 'supplier_nama' => 'PT. Indofood', 'supplier_alamat' => 'Dampit'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP2', 'supplier_nama' => 'CV Makmur', 'supplier_alamat' => 'Turen'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP3', 'supplier_nama' => 'UD Sejahtera', 'supplier_alamat' => 'Malang'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
