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
        Schema::create('hearos', function (Blueprint $table) {
            $table->id();
            $table->tinyText('hearotitle')->nullable();
            $table->string('hearoimg')->nullable();
            $table->tinyText('shortdes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hearos');
    }
};
