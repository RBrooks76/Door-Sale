<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HingePrice extends Model
{
    use HasFactory;

    protected $table = "tbl_hinge_price";

    protected $fillable = [
        'hinge_type',
        'hinge_tag',
        'price'
    ];
}
