<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_address extends Model
{
    //

    protected $table = "product_address";

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'street',
        'pincode',
        'city',
        'state',
        'country',
        'landmark',
        'address_type',
        'user_id',
        'status'
    ];

    public $timestamps = false;
}
