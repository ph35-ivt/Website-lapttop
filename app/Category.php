<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
    protected $fillable = [
        'name','slug','description','status','order'
    ];
    public function product()
    {
    	return $this->hasMany('App\Product');
    }

}
