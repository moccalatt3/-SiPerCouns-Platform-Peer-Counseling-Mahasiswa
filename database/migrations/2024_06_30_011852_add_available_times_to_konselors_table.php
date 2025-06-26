<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvailableTimesToKonselorsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('konselor', 'available_times')) {
            Schema::table('konselor', function (Blueprint $table) {
                $table->string('available_times')->nullable()->after('available_days');
            });
        }
    }


    public function down()
    {
        Schema::table('konselor', function (Blueprint $table) {
            $table->dropColumn('available_times');
        });
    }
}
