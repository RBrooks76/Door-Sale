<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorMaterial extends Model
{
    use HasFactory;

    protected $table = "tbl_door_material";
    protected $fillable = [
        'door_id',
        'name',
    ];
}
