<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store_product extends Model
{
    //

    protected $table = "store_product";


    protected $fillable = [
        'product_id',
        'product_size',
        'product_color',
        'product_uptime',
        'user_id',
    ];

    public $timestamps = false;
}
