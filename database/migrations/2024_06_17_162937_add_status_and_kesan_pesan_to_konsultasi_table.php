<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndKesanPesanToKonsultasiTable extends Migration
{
    public function up()
    {
        Schema::table('konsultasi', function (Blueprint $table) {
            $table->string('status')->default('pending'); // 'pending', 'completed', 'live_chat'
            $table->text('kesan_pesan')->nullable();
        });
    }

    public function down()
    {
        Schema::table('konsultasi', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('kesan_pesan');
        });
    }
}
