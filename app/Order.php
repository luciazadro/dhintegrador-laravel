<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shipping;
use App\Payment;

class Order extends Model
{
    public function shipping() 
    {
        return $this->hasOne(Shipping::class);
    }
    public function Payment() 
    {
        return $this->hasOne(Payment::class);
    }
}
