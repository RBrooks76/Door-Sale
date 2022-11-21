<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FingerPull extends Model
{
    use HasFactory;

    protected $table = "tbl_finger_pull";
    protected $fillable = [
        'name',
    ];
}
