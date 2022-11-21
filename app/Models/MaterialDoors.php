<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDoors extends Model
{
    use HasFactory;

    protected $table = "tbl_material_doors";

    protected $fillable = [
            'name',
    ];
}
