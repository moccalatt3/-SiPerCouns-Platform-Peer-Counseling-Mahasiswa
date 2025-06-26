<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('id_konselor'); // Foreign key
            $table->string('img_konselor')->nullable();
            $table->string('judul');
            $table->string('topik');
            $table->string('img_artikel')->nullable();
            $table->string('kategori');
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('id_konselor')->references('id_konselor')->on('konselor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
