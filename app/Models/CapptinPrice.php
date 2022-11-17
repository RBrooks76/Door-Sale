<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapptinPrice extends Model
{
    use HasFactory;

    protected $table = "tbl_capping_price";
    protected $fillable = [
        'name',
        'price',
    ];
}
