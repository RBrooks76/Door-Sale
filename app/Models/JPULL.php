<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JPULL extends Model
{
    use HasFactory;

    protected $table = "tbl_jpull";

    protected $fillable = [
        'name',
    ];
}
