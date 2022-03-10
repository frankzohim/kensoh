<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'new',
        'position',
        'featured',
        'meta_description',
        'meta_keywords',
        'state',
        'unit_price',
        'stock_quantity',
        'nature',
        'category_id',
        'brand_id',
        'store_id',
        'user_id'
    ];
}
