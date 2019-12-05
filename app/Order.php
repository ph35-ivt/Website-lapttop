<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'payment','status'
    ];
    public function order__details()
    {
    	return $this->hasMany('App\Order__detail');
    }
}
