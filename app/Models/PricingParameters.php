<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingParameters extends Model
{
    use HasFactory;

    protected $table = "tbl_pricing_parameters";
    protected $fillable = [
        'name',
        'content',
    ];
}
