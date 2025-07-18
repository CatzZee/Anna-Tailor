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
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Sesuai ID_user
            $table->string('name'); // Sesuai Name_user
            $table->string('email')->unique(); // Sesuai Email_user
            $table->string('password'); // Sesuai Password_user
            $table->enum('role', ['admin', 'kasir', 'pelanggan'])->default('pelanggan'); // Sesuai Role_user
            $table->timestamps(); // Sesuai created_at dan tambahan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
