<?php

namespace App\Models;

use Database\Factories\LiggingExtraFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LiggingExtra extends Model
{
    /** @use HasFactory<LiggingExtraFactory> */
    use HasFactory;

    public function hotelKamer(): BelongsTo
    {
        return $this->belongsTo(HotelKamer::class);
    }
}
