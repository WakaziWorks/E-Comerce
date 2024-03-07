<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
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

}
