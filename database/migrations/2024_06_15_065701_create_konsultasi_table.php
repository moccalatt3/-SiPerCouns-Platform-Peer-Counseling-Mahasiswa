<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasiTable extends Migration
{
    public function up()
    {
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id_konsultasi'); // Primary key
            $table->unsignedBigInteger('id_pengguna'); // Foreign key to pengguna
            $table->unsignedBigInteger('id_konselor'); // Foreign key to konselor
            $table->string('nama_lengkap');
            $table->string('program_studi');
            $table->string('gender');
            $table->string('jenis_konsultasi');
            $table->string('topik_konsultasi');
            $table->string('mode_konsultasi');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_konselor')->references('id_konselor')->on('konselor')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('konsultasi');
    }
}
