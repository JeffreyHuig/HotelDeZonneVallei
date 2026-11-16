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
        Schema::create('hotel_kamers', function (Blueprint $table) {
            $table->id();
            $table->integer('kamernummer');
            $table->integer('verdieping');
            $table->foreignId('bezetting_id')->constrained('bezettings');
            $table->foreignId('luxeniveau_id')->constrained('luxeniveaus');
            $table->foreignId('suite_indeling_id')->nullable()->constrained();
            $table->foreignId('ligging_extra_id')->nullable()->constrained();
            $table->text('omschrijving');
            $table->decimal('prijs', total: 6, places: 2);
            $table->boolean('beschikbaarheid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_kamers');
    }
};
