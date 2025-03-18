<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'laporans')->insert([
            [
                'id_buku' => '1',
                'jumlah_dipinjam'=>'12',
                'periode'=>'Bulanan'
            ],
            [
                'id_buku' => '3',
                'jumlah_dipinjam'=>'6',
                'periode'=>'Mingguan'
            ],
           
        ]);
    }
}