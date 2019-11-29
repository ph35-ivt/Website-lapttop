<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_category_id','name','category_slug','description','order','status'
    ];
    public function comments()
    {
    	return $this->hasMany('App\Comments');
    }
    public function products()
    {
    	return $this->hasMany('App\Product');
    }

}
