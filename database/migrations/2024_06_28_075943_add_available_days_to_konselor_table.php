<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvailableDaysToKonselorTable extends Migration
{
    public function up()
    {
        Schema::table('konselor', function (Blueprint $table) {
            $table->string('available_days')->nullable(); // Atau tipe data lain yang sesuai
        });
    }

    public function down()
    {
        Schema::table('konselor', function (Blueprint $table) {
            $table->dropColumn('available_days');
        });
    }
}
