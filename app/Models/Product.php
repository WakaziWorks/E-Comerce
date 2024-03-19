<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // If you want to specify exactly which attributes can be mass-assigned, you can use the $fillable array
    protected $fillable = [
        'ProductName',
        'SupplierID',
        'CategoryID',
        'QuantityPerUnit',
        'UnitPrice',
        'UnitsInStock',
        'UnitsOnOrder',
        'ReorderLevel',
        'Discontinued',
    ];

    // If you prefer to use $guarded, specify which attributes are not mass assignable.
    // protected $guarded = ['id'];

    /**
     * Get the supplier that supplies the product.
     */
    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'SupplierID', 'id');
    }

    /**
     * Get the category of the product.
     */
    public function category()
    {
        return $this->belongsTo(Categories::class, 'CategoryID', 'id');
    }

    // Add any additional methods or relationship declarations below as needed
}
