<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameKonselorToArtikelTable extends Migration
{
    public function up()
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->string('name_konselor')->nullable();
        });
    }

    public function down()
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropColumn('name_konselor');
        });
    }
}
