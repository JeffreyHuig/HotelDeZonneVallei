<?php

namespace App\Models;

use Database\Factories\LuxeniveauFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Luxeniveau extends Model
{
    /** @use HasFactory<LuxeniveauFactory> */
    use HasFactory;

    public function hotelKamer(): BelongsTo
    {
        return $this->belongsTo(HotelKamer::class);
    }
}
