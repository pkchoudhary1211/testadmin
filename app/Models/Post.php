<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title', 'details', 'Categary','ImageFile','User','post_date','views',
    ];

     protected $table = 'Post';
     public $timestamps=false;
}
