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
    Schema::create('suppliers', function (Blueprint $table) {
        $table->id('SupplierID');
        $table->string('CompanyName');
        $table->string('ContactName');
        $table->string('ContactTitle');
        $table->string('Phone1');
        $table->string('Phone2')->nullable(); // Assuming Phone2 can be nullable
        $table->string('Phone3')->nullable(); // Assuming Phone3 can be nullable
        $table->string('EmailAddress')->unique(); // Assuming EmailAddress should be unique
        $table->text('PhysicalAddress');
        $table->string('PIN'); // Assuming PIN stands for Personal Identification Number or similar
        $table->string('City');
        $table->string('County');
        $table->string('Fax')->nullable(); // Assuming Fax can be nullable
        $table->string('WebAddress')->nullable(); // Assuming WebAddress can be nullable
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
