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
        Schema::create('gif_codes', function (Blueprint $table) {
            $table->id();
            $table->string('gif_code');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->bigInteger('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gif_codes');
    }
};
