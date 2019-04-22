<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title', 'details', 'Categary','ImageFile','User',
    ];

     protected $table = 'Post';
     public $timestamps=false;
}
