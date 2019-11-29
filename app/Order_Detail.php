<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
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
