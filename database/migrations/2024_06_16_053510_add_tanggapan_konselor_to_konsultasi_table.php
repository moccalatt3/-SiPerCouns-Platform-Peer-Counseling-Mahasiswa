<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_tanggapan_konselor_to_konsultasi_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggapanKonselorToKonsultasiTable extends Migration
{
    public function up()
    {
        Schema::table('konsultasi', function (Blueprint $table) {
            $table->text('tanggapan_konselor')->nullable()->after('mode_konsultasi');
        });
    }

    public function down()
    {
        Schema::table('konsultasi', function (Blueprint $table) {
            $table->dropColumn('tanggapan_konselor');
        });
    }
}
