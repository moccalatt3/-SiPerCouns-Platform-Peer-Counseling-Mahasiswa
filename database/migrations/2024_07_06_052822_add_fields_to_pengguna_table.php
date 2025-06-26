<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPenggunaTable extends Migration
{
    public function up()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->string('img_pengguna')->nullable();
            $table->text('about')->nullable();
            $table->string('city')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->dropColumn('img_pengguna');
            $table->dropColumn('about');
            $table->dropColumn('city');
        });
    }
}