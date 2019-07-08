<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Payment extends Model
{
    public function Order() 
    {
        return $this->belongsTo(Order::class);
    }
}
