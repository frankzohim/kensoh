<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'email',
            'phone',
            'description',
            'country_id',
            'town',
            'street',
            'logo',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
