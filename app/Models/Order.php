<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "tbl_order";
    protected $fillable = [
        'ordered_date',
        'required_date',
        'customer',
        'delivery_address',
        'telephone',
        'fax',
        'contact_person',
        'order_number',
        'door_design',
        'edge_profile',
        'door_color',
        'pvc_edging',
        'cabinet_type',
        'kisks_rail_type',
        'door_type',
        'drawer_type',
        'hinge_type',
    ];
}
