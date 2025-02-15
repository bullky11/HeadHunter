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
        Schema::create('allaskereso_tanulmanys', function (Blueprint $table) {
            $table->foreignId('allaskereso')->references('user_id')->on('allaskeresos');
            $table->string('intezmeny', 50);
            $table->foreignId('vegzettseg')->references('sorszam')->on('vegzettsegs');
            $table->primary(['allaskereso','intezmeny','vegzettseg']);
            $table->date('kezdes');
            $table->date('vegzes')->nullable();
            $table->longText('erintett_targytev', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allaskereso_tanulmanys');
    }
};
