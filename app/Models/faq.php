<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'state',
<<<<<<< HEAD
=======
        'user_id',
>>>>>>> 5961a5f (CREATEFAQ IS CORRECT)

    ];
}
