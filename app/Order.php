<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'name','email','phone','address','date_order','payment','status'
    ];
    public function order__details()
    {
    	return $this->hasMany('App\Order__detail');
    }
}
