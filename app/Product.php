<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
        'category_id','name','product_slug','description','content','price','images','quantity','status'
    ];
    
}
