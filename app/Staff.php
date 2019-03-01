<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable = [
        'Staff_No',
        'Name',
        'Address',
        'Position',
        'email',
        'password'
    ];
}
