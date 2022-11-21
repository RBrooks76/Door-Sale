<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintedDoorOrderTitle extends Model
{
    use HasFactory;

    protected $table = "tbl_painted_door_order_title";
    protected $fillable = [
        'serial_number',
        'user_id',
        'ordered_date',
        'required_date',
        'customer',
        'company',
        'delivery_address',
        'delivery_state',
        'job_ref',
        'mobile',
    ];
}
