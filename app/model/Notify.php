<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    //
    protected $table = 'notifys';
    protected $fillable = [
        'user_id','message','title','name','is_read',
    ];
}
