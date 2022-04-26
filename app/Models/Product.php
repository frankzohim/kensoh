<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Store;

class Product extends Model
{
    use HasFactory;

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }

    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    /**
     * Get all of the reviews for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}

