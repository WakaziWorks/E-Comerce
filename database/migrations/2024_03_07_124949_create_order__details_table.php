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
    Schema::create('order_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('OrderID')->constrained('orders')->onDelete('cascade');
        $table->foreignId('ProductID')->constrained('products')->onDelete('cascade');
        $table->decimal('UnitPrice', 8, 2);
        $table->integer('Quantity');
        $table->decimal('Discount', 5, 2)->default(0); // Example precision with a default value of 0
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__details');
    }
};
