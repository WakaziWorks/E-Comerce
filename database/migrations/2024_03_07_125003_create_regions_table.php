<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id('RegionID');
            $table->string('RegionName');
            $table->timestamps();
        });
    
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('RegionID')->constrained('regions')->onDelete('cascade');
            $table->string('CityName');
            $table->string('PostalAbbrev');
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
