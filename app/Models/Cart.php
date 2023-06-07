<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $table = "carts";

    protected $fillable = [
    	'product_id',
		'user_id',
		'quantity',
		'price',
		'package',
		'color',
    ];
}
