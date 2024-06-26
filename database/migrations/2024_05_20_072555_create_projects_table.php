<?php

use App\Models\catogery;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->tinyText('title')->nullable();
            $table->text('shortdes')->nullable();
            $table->longText('des')->nullable();
            $table->text('imgsumnail')->nullable();
            $table->longText('images')->nullable();
            $table->string('project_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('youtube_url')->nullable();

            $table->foreignIdFor(catogery::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
