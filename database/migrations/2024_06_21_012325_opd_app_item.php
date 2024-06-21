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
        Schema::create('opd_app_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_app_kategori')->unsigned();
            $table->bigInteger('id_aplikasi')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opd_app_item');
    }
};
