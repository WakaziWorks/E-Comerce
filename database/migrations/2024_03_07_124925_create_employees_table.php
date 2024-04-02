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
    Schema::create('employees', function (Blueprint $table) {
<<<<<<< HEAD
        $table->id(); // Auto-incrementing primary key
=======
        $table->id('EmployeeID'); // Auto-incrementing primary key
>>>>>>> 6ba6bdb5 (Revert "fix")
        $table->string('LastName');
        $table->string('FirstName');
        $table->string('Title')->nullable(); // Assuming this can be nullable
        $table->string('TitleOfCourtesy')->nullable(); // Assuming this can be nullable
        $table->date('DOB'); // Date of Birth
        $table->date('HireDate');
        $table->text('PostalAddress')->nullable(); // Assuming this can be nullable
        $table->string('City');
        $table->string('County')->nullable(); // Assuming this can be nullable
        $table->string('PostalCode');
        $table->string('Country');
        $table->string('Phone')->nullable(); // Assuming this can be nullable
        $table->string('Email')->unique(); // Assuming Email should be unique
        $table->binary('Photo')->nullable(); // Assuming this can be nullable
        $table->text('BriefBio')->nullable(); // Assuming this can be nullable
        $table->foreignId('ReportsTo')->nullable()->constrained('employees')->onDelete('SET NULL'); // Assuming an employee can report to another employee
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
