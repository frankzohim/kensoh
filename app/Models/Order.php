<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'categories_id',
        'state',
        'budget',
        'user_id'
    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
