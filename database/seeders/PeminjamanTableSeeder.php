<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PeminjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'peminjamen')->insert([
            [
                'id_buku' => '1',
                'tgl_peminjaman'=>'2025-02-18',
                'tgl_pengembalian'=>'2025-03-18'
            ],
            [
                'id_buku' => '3',
                'tgl_peminjaman'=>'2023-10-18',
                'tgl_pengembalian'=>'2023-10-25'
            ],
        ]);
    }
}