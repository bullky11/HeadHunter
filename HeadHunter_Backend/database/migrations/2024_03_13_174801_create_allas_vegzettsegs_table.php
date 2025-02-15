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
        Schema::create('allas_vegzettsegs', function (Blueprint $table) {
            $table->foreignId('allas')->references('allas_id')->on('allass');
            $table->foreignId('vegzettseg')->references('sorszam')->on('vegzettsegs');
            $table->primary('allas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allas_vegzettsegs');
    }
};
