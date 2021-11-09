<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //use HasFactory;
    public $room = [
        'room_name',
        'room_address',
        'room_price',
        'room_status',
        'room_image',
    ];
}
