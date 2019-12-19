<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


	protected $fillable = [
        'category_id','name','slug','content','price','link','quantity','status'
    ];
    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
    public function order_details()
    {
    	return $this->hasMany('App\Order_detail');
    }
    public function getImageAttribute()
    {
       return $this->link;
    }
}
