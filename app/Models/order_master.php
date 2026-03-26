<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_master extends Model
{
    protected $primaryKey = 'Order_id';

    protected $fillable = [
        'Order_date',
        'Order_status',
        'Order_totalammount',
    ];
}
