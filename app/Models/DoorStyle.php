<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorStyle extends Model
{
    use HasFactory;

    protected $table = "tbl_door_style";
    protected $fillable = [
        'category_id',
        'style_name',
    ];
}
