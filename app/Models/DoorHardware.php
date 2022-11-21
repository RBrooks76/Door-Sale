<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorHardware extends Model
{
    use HasFactory;

    protected $table = "tbl_door_hardware";
    protected $fillable = [
        'door_id',
        'name'
    ];
}
