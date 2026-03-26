<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'Product_id';

    protected $fillable = [
        'Product_name',
        'Product_price',
        'Product_image',
        'Product_details',
        'Product_qty',
    ];
}
