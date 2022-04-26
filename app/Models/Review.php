<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    use HasFactory;

        /**
         * Get the product that the Review belongsTo
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Product(): BelongsTo
        {
            return $this->belongsTo(Product::class, 'foreign_key', 'other_key');
        }
    
}
