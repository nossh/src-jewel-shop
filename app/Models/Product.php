<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
		'name',
        'slug',
        'description',
        'short_description',
        'image_name',
        'price',
        'stock_status',
        'sale_price',
        'platinum_price',
        'platinum_sale_price',
        'gold_price',
        'gold_sale_price',
        'all_pack_price',
        'all_pack_sale_price',
        'color_name',
        'color_code',
        'SKU',
        'EAN',
        'package',
    ];
}
