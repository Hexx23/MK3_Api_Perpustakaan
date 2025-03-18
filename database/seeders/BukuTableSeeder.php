<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            [
                'judul' => 'How to be a bilioner',
                'penulis' => 'Chris John',
                'kategori' => 'Pelajaran',
                'tahun_terbit'=>'2004'
            ],
            [
                'judul' => 'Dilan 2076',
                'penulis' => 'Ernest Pratama',
                'kategori' => 'Fiksi',
                'tahun_terbit'=>'2021'
            ],
            [
                'judul' => 'Harry Puter',
                'penulis' => 'Max Versetile',
                'kategori' => 'Fiksi',
                'tahun_terbit'=>'2004'
            ]
        ]);
    }
}