<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_fasilitas_daerah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kategori')->unsigned();
            $table->text('deskripsi')->nullable();
            $table->string('nama');
            $table->string('kontak')->nullable();
            $table->string('foto')->nullable();
            $table->string('gps_koordinat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_fasilitas_daerah');
    }
};
