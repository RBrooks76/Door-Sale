<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinets extends Model
{
    use HasFactory;

    protected $table = "tbl_cabinets";
    protected $fillable = [
        'name',
    ];
}
