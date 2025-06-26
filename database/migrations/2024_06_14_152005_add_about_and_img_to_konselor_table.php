<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAboutAndImgToKonselorTable extends Migration
{
    public function up()
    {
        Schema::table('konselor', function (Blueprint $table) {
            $table->text('about')->nullable();
            $table->string('img')->nullable();
        });
    }

    public function down()
    {
        Schema::table('konselor', function (Blueprint $table) {
            $table->dropColumn('about');
            $table->dropColumn('img');
        });
    }
}
