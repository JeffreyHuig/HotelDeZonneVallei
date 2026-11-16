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
        Schema::create('kamertypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bezetting_id')->constrained('bezettings');
            $table->foreignId('luxeniveau_id')->constrained('luxeniveaus');
            $table->foreignId('suite_indeling_id')->nullable()->constrained();
            $table->foreignId('ligging_extra_id')->nullable()->constrained();
            $table->text('omschrijving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamertypes');
    }
};
