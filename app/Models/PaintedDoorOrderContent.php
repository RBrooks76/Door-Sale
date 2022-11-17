<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintedDoorOrderContent extends Model
{
    use HasFactory;

    protected $table = "tbl_painted_door_order_content";
    protected $fillable = [
        'serial_number',
        'user_id',
        'category',
        'finish',
        'style',
        'material',
        'colour',
        'finish_first',
        'finish_second',
        'finish_third',
        'finish_fourth',
        'finish_fifth',
        'finish_sixth',
        'dimension_first',
        'dimension_second',
        'dimension_third',
        'dimension_fourth',
        'hardware_first',
        'hardware_second',
        'hardware_third',
        'hardware_fourth',
        'hardware_fifth',
        'total_amount',
        'comment',
    ];

}
