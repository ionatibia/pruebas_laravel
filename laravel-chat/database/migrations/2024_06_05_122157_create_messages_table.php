<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_id');
            $table->text('text');
            $table->timestamps();
            $table->foreignId('to');
            $table->foreignId('from');
            $table->boolean('read');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
