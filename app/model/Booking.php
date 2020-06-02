<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable  = [
        'user_id','hostel_id','room_id','price','arrival_date','duration','status'
    ];
}
