<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->unsignedBigInteger('id_buku'); // Foreign Key
            $table->integer('jumlah_dipinjam');
            $table->string('periode', 50);
            $table->timestamps();

        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: 'laporans');
    }
};