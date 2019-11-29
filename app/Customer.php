<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected  $table = "Customer";
    protected $fillable = [
       'name','email','phone'
    ];
     public function orders()
    {
    	return $this->hasMany('App\Order');
    }
}
