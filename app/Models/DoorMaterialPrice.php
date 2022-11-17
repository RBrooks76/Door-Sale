<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorMaterialPrice extends Model
{
    use HasFactory;

    protected $table = "tbl_door_material_price";
    protected $fillable = [
        'name',
        'price',
        'cum_price',
    ];
}
