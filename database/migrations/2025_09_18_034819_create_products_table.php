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
        Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique(); // For clean URLs like /products/cool-blue-tshirt
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->string('sku')->unique()->nullable(); // Stock Keeping Unit
    $table->unsignedInteger('quantity')->default(0); // Stock level
    $table->string('image_path')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
