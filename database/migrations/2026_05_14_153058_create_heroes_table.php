<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('heros', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('sub_text')->nullable();
        $table->string('video_path')->nullable();
        $table->string('image_path')->nullable();
        $table->string('button_text')->default('START A PROJECT');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
