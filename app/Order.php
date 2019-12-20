<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'name','email','phone','address','date_order','payment','status','total'
    ];
    const STATUS_DONE = 0;
    const STATUS_DEFAULT = 1;
    public function order_details()
    {
    	return $this->hasMany('App\OrderDetail');
    }
    
}
