<?php

namespace App\Models;

use Database\Factories\LiggingExtraFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LiggingExtra extends Model
{
    /** @use HasFactory<LiggingExtraFactory> */
    use HasFactory;

    public function hotelKamer(): HasMany
    {
        return $this->hasMany(HotelKamer::class);
    }
}
