<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorPricing extends Model
{
    use HasFactory;

    protected $table = "tbl_door_pricing";
    protected $fillable = [
            'tag',
            'edging',
            'edge_mould',
            'type',
            'doors',
            'undercoat',
            'gloss',
            'semi_gloss',
            'satin',
            'textured',
            'matt',
            'raw',
            'other',
            'ord_tag',
            'ord_material_tag',
            'ord_suffix',
    ];

}
