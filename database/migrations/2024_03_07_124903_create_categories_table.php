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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('Category_ID'); // Creates an auto-incrementing primary key named Category_ID
            $table->string('CategoryName');
            $table->text('Description')->nullable(); // Assuming the description can be nullable
            $table->binary('Picture')->nullable(); // Assuming the picture can be nullable, and storing it as binary data
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
