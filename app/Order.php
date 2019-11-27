<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected  $table = "Order";
    protected $fillable = [
        'customer_id','payment','status'
    ];
     public function customers()
    {
    	return $this->belongsToMany('App\Customer');
    }
     public function order__details()
    {
    	return $this->hasMany('App\Order__detail');
    }
}
