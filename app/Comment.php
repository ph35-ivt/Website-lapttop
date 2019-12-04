<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
        'cm_name','cm_email','product_id','content'
    ];
     
}
