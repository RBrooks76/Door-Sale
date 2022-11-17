<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorHardwareSecond extends Model
{
    use HasFactory;

    protected $table = "tbl_door_hardware_second";
    protected $fillable = [
        'door_id',
        'name'
    ];
}
