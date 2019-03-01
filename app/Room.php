<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'Room_No',
        'Status',
        'Price',
        'Max_pax'
    ];
}
