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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            // Kolom Foreign Key yang menghubungkan ke tabel tables
            $table->foreignId('table_id')->constrained('tables')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->dateTime('reservation_date');
            $table->integer('guests_count');
            $table->text('special_requests')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
