<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commment extends Model
{
	protected $fillable = [
        'new_id','user_id','product_id','content'
    ];
    
}
