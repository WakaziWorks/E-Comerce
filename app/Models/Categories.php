<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    // Specify the table if the name of the model is not the singular of the table
    protected $table = 'categories';

    // The primary key is not 'id', so specify the custom key name
    protected $primaryKey = 'Category_ID';

    // Laravel assumes that the primary key is auto-incrementing and should be cast to an int. Since that's the case here, no need to change it.

    // Define which attributes are mass assignable
    protected $fillable = [
        'CategoryName',
        'Description',
        'Picture',
    ];

    // Optionally, if you want to work with the Picture attribute as a file or image, you might want to define accessors and mutators to handle the binary data.
}
