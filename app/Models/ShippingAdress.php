<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAdress extends Model
{
    use HasFactory;

    protected $table = 'shipping_adresses';
    protected $guarded = [];
}
