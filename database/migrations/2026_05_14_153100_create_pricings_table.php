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
    Schema::create('pricings', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Basic, Pro, Max
        $table->string('price');
        $table->text('description');
        $table->json('features'); // Laravel will store array of features
        $table->boolean('is_featured')->default(false);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
