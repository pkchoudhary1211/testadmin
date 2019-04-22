<?php

namespace App\Models;
use Zizaco\Entrust\EntrustRole;
//use Illuminate\Database\Eloquent\Model;

class Roles extends EntrustRole
{
     protected $fillable = [
        'id', 'name', 'display_name','description',
    ];

     protected $table = 'roles';

     public $timestamps=false;
}
