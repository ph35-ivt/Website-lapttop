<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	 protected  $table = "Categories";
    protected $fillable = [
        'name','category_slug','description','status'
    ];
     public function product()
    {
    	return $this->hasMany('App\Product');
    }

}
