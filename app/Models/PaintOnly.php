<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintOnly extends Model
{
    use HasFactory;

    protected $table = "tbl_paint_only";
    protected $fillable = [
        'finish_id',
        'paint_only',
    ];
}
