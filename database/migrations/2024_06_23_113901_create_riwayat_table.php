<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_konselor');
            $table->string('nama_lengkap');
            $table->string('program_studi');
            $table->string('gender');
            $table->string('jenis_konsultasi');
            $table->string('topik_konsultasi');
            $table->string('mode_konsultasi');
            $table->text('tanggapan_konselor')->nullable();
            $table->text('tanggapan_pengguna')->nullable();
            $table->string('status');
            $table->text('kesan_pesan')->nullable();
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_konselor')->references('id_konselor')->on('konselor')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
};

