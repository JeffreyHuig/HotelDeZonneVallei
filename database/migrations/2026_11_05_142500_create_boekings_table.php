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
        Schema::create('boekings', function (Blueprint $table) {
            $table->id();
            $table->integer('boekingsnummer');
            $table->foreignId('kamernummer')->constrained('hotel_kamers');
            $table->foreignId('gastnummer')->constrained('users');
            $table->integer('aantalgasten');
            $table->date('aankomstdatum');
            $table->date('vertrekdatum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boekings');
    }
};
