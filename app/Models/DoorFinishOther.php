<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorFinishOther extends Model
{
    use HasFactory;

    protected $table = "tbl_door_finish_other";
    protected $fillable = [
        'door_id',
        'name'
    ];
}
