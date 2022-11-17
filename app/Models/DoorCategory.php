<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorCategory extends Model
{
    use HasFactory;

    protected $table = "tbl_door_category";
    protected $fillable = [
        'name',
    ];
}
