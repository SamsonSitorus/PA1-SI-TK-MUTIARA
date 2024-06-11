<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Judul pengumuman
            $table->text('content'); // Konten pengumuman
            $table->string('file')->nullable(); // Kolom untuk menyimpan jalur file
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumumen');
    }
};
