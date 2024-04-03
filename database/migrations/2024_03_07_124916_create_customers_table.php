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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CustomerID'); // Assuming you want an auto-incrementing primary key named CustomerID
            $table->string('CustomerName');
            $table->string('Affiliation')->nullable(); // Assuming Affiliation can be nullable
            $table->string('Phone1');
            $table->string('Phone2')->nullable(); // Assuming Phone2 can be nullable
            $table->string('Email')->unique(); // Assuming Email should be unique
            $table->text('PhysicalAddress');
            $table->text('PostalAddress')->nullable(); // Assuming Postal Address can be nullable
            $table->string('PostalCode');
            $table->string('City');
            $table->string('County');
            $table->string('Country');
            $table->string('Fax')->nullable(); // Assuming Fax can be nullable
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
