<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinetsPrice extends Model
{
    use HasFactory;

    protected $table = "tbl_cabinets_price";
    protected $fillable = [
        'tag_id',
        'cabinet_id',
        'value'
    ];
}
