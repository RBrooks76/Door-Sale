<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorMullon extends Model
{
    use HasFactory;

    protected $table = "tbl_door_mullion";
    protected $fillable = [
        'name',
    ];
}
