<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_order',
        'address_order',
        'mark_order',
        'telp_order',
        'email_order',
        'pack_order',
        'odpzone_order',
        'odp_order',
        'odpnum_order',
        'status_order'
    ];
}
