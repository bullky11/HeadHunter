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
        Schema::create('fejvadasz_terulets', function (Blueprint $table) {
            $table->foreignId('fejvadasz')->references('user_id')->on('fejvadaszs');
            $table->string('terulet');
            $table->primary(['fejvadasz','terulet']);
            $table->foreign('terulet')->references('megnevezes')->on('terulets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fejvadasz_terulets');
    }
};
