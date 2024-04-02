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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreign('customer_id', 'orders_customer_id_foreign')->references('customer_id')->on('customers')->onDelete('cascade');
        $table->foreignId('EmployeeID')->constrained()->onDelete('cascade');
        $table->dateTime('OrderDate');
        $table->dateTime('RequiredDate');
        $table->dateTime('ShippedDate')->nullable(); // Assuming ShippedDate can be null if the order hasn't shipped yet
        $table->string('ShipVia')->nullable(); // Assuming this can be nullable
        $table->decimal('Freight', 8, 2)->default(0); // Assuming a default freight cost
        $table->string('DriverName')->nullable(); // Assuming the driver name can be nullable
        $table->text('LocationAddress');
        $table->string('City');
        $table->string('County');
        $table->string('DeliveryCode');
        $table->text('AdditionalNotes')->nullable(); // Assuming additional notes can be nullable
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
