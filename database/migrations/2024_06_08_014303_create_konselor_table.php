<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonselorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konselor', function (Blueprint $table) {
            $table->bigIncrements('id_konselor'); // Primary key
            $table->string('name');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('available_times')->nullable();
            $table->timestamps(); // Created at and updated at columns
            $table->softDeletes(); // Deleted at column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konselor');
    }
}
