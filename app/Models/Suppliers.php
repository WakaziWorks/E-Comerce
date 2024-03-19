<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model // Model name should ideally be singular, matching the singular form of your table name
{
    use HasFactory;

    // Laravel will automatically assume the table name is the plural form of the model name.
    // If it's not, you can specify it explicitly, but in this case, it's not necessary.

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'SupplierID';

    // Laravel assumes primary keys are integers and should auto-increment.
    // If your primary key does not auto-increment or is not an integer, you should specify that in the model.
    // In this case, it's assumed to be auto-incrementing and an integer, so no changes are needed.

    // Define which attributes can be mass assigned
    protected $fillable = [
        'CompanyName',
        'ContactName',
        'ContactTitle',
        'Phone1',
        'Phone2',
        'Phone3',
        'EmailAddress',
        'PhysicalAddress',
        'PIN',
        'City',
        'County',
        'Fax',
        'WebAddress',
    ];

    // Assuming EmailAddress is unique, no additional configuration is needed here for that
    // But ensure your database migration or schema enforces this uniqueness
}
