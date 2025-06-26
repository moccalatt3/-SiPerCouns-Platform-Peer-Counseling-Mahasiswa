<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konsultasi');
            $table->unsignedBigInteger('sender_id');
            $table->string('sender_type'); // 'konselor' atau 'pengguna'
            $table->text('message');
            $table->timestamps();
        
            // Definisi foreign key
            $table->foreign('id_konsultasi')->references('id_konsultasi')->on('konsultasi')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
