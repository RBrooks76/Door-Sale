<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelOption extends Model
{
    use HasFactory;

    protected $table = "tbl_panel_option";
    protected $fillable = [
        'flat_panels',
        'cabinet_vision_tag',
        'code',
        'raw',
        'description',
    ];
}
