<?php

namespace App\Models;
use Zizaco\Entrust\EntrustPermission;
//use Illuminate\Database\Eloquent\Model;

class Permission extends EntrustPermission
{
     protected $fillable = [
        'id', 'name', 'display_name','description',
    ];

     protected $table = 'permissions';
     
     public $timestamps=false;
}
