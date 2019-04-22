<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
     protected $fillable = [
        's_name', 's_email',
    ];

     protected $table = 'subscriber';
     public $timestamps=false;
}
