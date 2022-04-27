<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Review extends Model
{
    use HasFactory;

        /**
         * Get the product that the Review belongsTo
         *
         * @return App\Models\BelongsTo
         */
        public function product()
        {
            return $this->belongsTo(Product::class);
        }

        /**
         * Get the user that makes the Review
         *
         * @return App\Models\BelongsTo
         */
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
}
