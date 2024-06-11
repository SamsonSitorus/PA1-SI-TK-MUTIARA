<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) { // Nama tabel
            $table->id();
            $table->string('image')->nullable(); // Kolom gambar, dengan nilai default nullable
            $table->string('title', 255)->unique(); // Batas maksimum 255 karakter
            $table->text('content'); // Kolom content
            $table->text('url')->nullable(); // URL bisa opsional
            $table->date('date'); // Kolom tanggal
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasis'); // Pastikan tabel yang tepat di-drop
    }
};
