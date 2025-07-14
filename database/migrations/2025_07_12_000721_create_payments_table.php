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
    Schema::create('payments', function (Blueprint $table) {
        $table->id(); // Sesuai ID_payment
        $table->foreignId('order_id')->constrained()->onDelete('cascade');
        $table->string('payment_method'); // Sesuai Method_payment
        $table->decimal('total_payment', 12, 2); // Sesuai Total_payment
        $table->string('status'); // Sesuai Status_payment
        $table->timestamps(); // Sesuai created_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
