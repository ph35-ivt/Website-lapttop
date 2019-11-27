<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = "Products";
	protected $fillable = [
        'category_id','name','product_slug','content','price','images','quantity','status'
    ];
     public function categories()
    {
    	return $this->belongsToMany('App\Categories');
    }
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
    public function order_details()
    {
    	return $this->hasMany('App\Order__details');
    }
    
}
