<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
     protected  $table = "Order_detail";
    protected $fillable = [
        'order_id','product_id','price','quantity'
    ];
     public function products()
    {
    	return $this->belongsToMany('App\Product');
    }
     public function orders()
    {
    	return $this->belongsToMany('App\Order');
    }
}
