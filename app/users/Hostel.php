<?php

namespace App\users;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $fillable = [
        'name','email','city','municipality','ward','type','totalRoom','phone','contact'
    ];
}
