<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'From_date',
        'To_date',
        'Room_No',
        'Customer_ID',
        'Staff_ID',
        'Total_Amount_Paid',
        'Pax'
    ];


}