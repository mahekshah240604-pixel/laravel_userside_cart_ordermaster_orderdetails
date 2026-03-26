<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $primaryKey = 'Orderdetils_id';

    protected $fillable = [
        'Order_id',
        'Product_id',
        'Product_qty',
        'Product_price',
       
    ];
}
