<?php

namespace App\Models;

use Database\Factories\BezettingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bezetting extends Model
{
    /** @use HasFactory<BezettingFactory> */
    use HasFactory;

    public function hotelKamer(): HasMany
    {
        return $this->hasMany(HotelKamer::class);
    }
}
