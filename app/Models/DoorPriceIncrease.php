<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorPriceIncrease extends Model
{
    use HasFactory;

    protected $table = "tbl_door_pirce_increase";
    protected $fillable = [
        'door_id',
        'dec_pi',
        'fy_pi',
    ];
}
