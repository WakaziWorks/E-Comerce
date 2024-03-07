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
    Schema::create('shippers', function (Blueprint $table) {
        $table->id('ShipperID');
        $table->string('CompanyName');
        $table->string('Phone1');
        $table->string('Phone2')->nullable(); // Optional, assuming Phone2 might not be provided for all shippers
        $table->string('Phone3')->nullable(); // Optional, assuming Phone3 might not be provided for all shippers
        $table->string('Email')->unique(); // Assuming Email should be unique across shippers
        $table->text('PhysicalAddress');
        $table->text('PostalAddress')->nullable(); // Optional, assuming Postal Address might not be provided for all shippers
        $table->string('Website')->nullable(); // Optional, assuming Website might not be provided for all shippers
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippers');
    }
};
