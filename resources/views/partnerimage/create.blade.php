<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partners;


class PartnerImage extends Model
{ 
    use HasFactory;

    public function partners():BelongsTo{
        return $this->belongsTo(Partners::class);
    }
}
