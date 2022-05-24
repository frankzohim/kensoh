<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PartnerImage;


class Partners extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_reason',
        'contact',
        'logo',
        'website',
        'email',
    ];

    public function partner_images():HasOne
    {
        return $this->hasOne(PartnerImage::class);
    }

}
 