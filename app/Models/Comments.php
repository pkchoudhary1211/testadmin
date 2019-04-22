<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     protected $fillable = [
        'postid', 'userid', 'comment','cdate',
    ];

     protected $table = 'comments';
     public $timestamps=false;
}
