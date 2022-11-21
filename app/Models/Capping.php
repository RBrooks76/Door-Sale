<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capping extends Model
{
    use HasFactory;

    protected $table = "tbl_capping";
    protected $fillable = [
        'capping',
        'price'
    ];
}
