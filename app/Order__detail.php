<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order__detail extends Model
{
   
    protected $fillable = [
        'order_id','product_id','price','quantity'
    ];
     public function products()
    {
    	return $this->belongsTo('App\Product','product_id' );
    }
     public function orders()
    {
    	return $this->belongsTo('App\Order');
    }
}
