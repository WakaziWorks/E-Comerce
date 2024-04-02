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
    Schema::create('products', function (Blueprint $table) {
        $table->id('ProductID');
        $table->string('ProductName');
        $table->foreignId('SupplierID')->constrained()->onDelete('cascade');
        $table->foreignId('CategoryID')->constrained()->onDelete('cascade');
        $table->string('QuantityPerUnit')->nullable(); // This column's requirement depends on your business logic
        $table->decimal('UnitPrice', 8, 2); // Example precision: 999,999.99
        $table->integer('UnitsInStock');
        $table->integer('UnitsOnOrder')->nullable(); // Assuming this can be nullable
        $table->integer('ReorderLevel');
        $table->boolean('Discontinued')->default(false); // false means not discontinued
        $table->timestamps(); // Adds created_at and updated_at columns
        $table->foreignId('SupplierID')->constrained('suppliers')->onDelete('cascade');
$table->foreignId('CategoryID')->constrained('categories')->onDelete('cascade');

    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
