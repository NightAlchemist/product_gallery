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
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->boolean('discount')->default(false);
            $table->decimal('price_after_discount', 10, 2)->nullable();
            $table->integer('reviews')->nullable();
            $table->integer('total_sales')->nullable();
            $table->integer('stock')->nullable();
            $table->string('model');
            $table->string('shipping');
            $table->string('tags')->nullable();
            $table->string('image_path')->nullable();
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
