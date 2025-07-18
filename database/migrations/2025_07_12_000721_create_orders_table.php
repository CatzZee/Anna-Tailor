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
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Sesuai ID_order
        $table->foreignId('user_id')->constrained('users'); // Sesuai ID_user(FK)
        $table->decimal('total_price', 12, 2); // Sesuai TotalPrice_order
        $table->string('status'); // Sesuai Status_order
        $table->timestamps(); // Sesuai created_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
