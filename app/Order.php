<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'user_id', 'shipping_id', 'payment_id' , 'order_no', 'order_total', 'status',
    ];
}





