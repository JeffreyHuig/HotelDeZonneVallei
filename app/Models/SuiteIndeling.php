<?php

namespace App\Models;

use Database\Factories\SuiteIndelingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SuiteIndeling extends Model
{
    /** @use HasFactory<SuiteIndelingFactory> */
    use HasFactory;

    public function hotelKamer(): BelongsTo
    {
        return $this->belongsTo(HotelKamer::class);
    }
}
