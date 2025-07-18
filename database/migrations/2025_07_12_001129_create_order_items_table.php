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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Sesuai ID_order_item
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // FK ke orders
            $table->foreignId('product_id')->constrained(); // FK ke products
            $table->integer('quantity'); // Sesuai Quantity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
