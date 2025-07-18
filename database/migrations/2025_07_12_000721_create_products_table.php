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
            $table->id(); // Sesuai ID_product
            $table->string('name'); // Sesuai Name_product
            $table->text('description')->nullable(); // Sesuai Description_product
            $table->decimal('price', 10, 2); // Sesuai Price_product
            $table->integer('stock')->default(0); // Sesuai Stock_product
            $table->string('category'); // Sesuai Category_product
            $table->string('image')->nullable();
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
