<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sochails', function (Blueprint $table) {
            $table->id();
            $table->string('youtube');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('whatsup');
            $table->string('tictok');
            $table->string('twitter');
            $table->string('gmail');
            $table->string('telgram');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sochails');
    }
};
