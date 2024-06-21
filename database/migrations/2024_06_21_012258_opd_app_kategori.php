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
        Schema::create('opd_app_kategori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_app_kategori');
            $table->string('nama_app_kategori_akronim')->nullable();
            $table->boolean('status');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opd_app_kategori');
    }
};
