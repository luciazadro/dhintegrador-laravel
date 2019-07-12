<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Shipping extends Model
{
    public function order() 
    {
        return $this->belongsTo(Order::class);
    }
}
