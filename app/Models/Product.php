<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Specify the attributes that are allowed for mass assignment
    protected $fillable = [
        'title',
        'price',
        'product_code',
        'description',
        // Add other attributes as needed for mass assignment
    ];

    // Rest of the model implementation...
}




// old code
// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Product extends Model
// {
//     use HasFactory;
// }
