<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karyas', function (Blueprint $table) {
            $table->id(); // Ini otomatis jadi Primary Key (A.I)
            $table->string('judul'); // Tipe VARCHAR
            $table->text('deskripsi'); // Tipe TEXT
            $table->timestamps(); // Fitur sakti penyimpan jam & tanggal
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyas');
    }
};
