<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_products';

    protected $fillable = [
        'product_name',
        'product_image',
        'product_price',
        'product_quantity',
        'product_description',
        'created_at',
        'updated_at',
        'status'
    ];
    public $timestamps = false;
}
