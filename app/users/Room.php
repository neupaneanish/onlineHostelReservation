<?php

namespace App\users;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['hostel_id','room_no','room_type','price','status'];
}
