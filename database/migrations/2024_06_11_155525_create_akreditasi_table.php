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
        Schema::create('akreditasi', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->string('pihak');
            $table->date('date');
            $table->integer('nilai_isi');
            $table->integer('nilai_kelulusan');
            $table->integer('nilai_proses');
            $table->integer('nilai_pendidikan');
            $table->integer('nilai_prasarana');
            $table->integer('nilai_pengelola');
            $table->integer('nilai_pembiayaan');    
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akreditasi');
    }
};
