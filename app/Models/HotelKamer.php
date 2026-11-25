<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelKamer extends Model
{
    /** @use HasFactory<\Database\Factories\HotelKamerFactory> */
    use HasFactory;

    public function bezetting(): BelongsTo
    {
        return $this->belongsTo(Bezetting::class);
    }

    public function luxeniveau(): BelongsTo
    {
        return $this->belongsTo(Luxeniveau::class);
    }

    public function suiteIndeling(): BelongsTo
    {
        return $this->belongsTo(SuiteIndeling::class);
    }

    public function liggingExtra(): BelongsTo
    {
        return $this->belongsTo(LiggingExtra::class);
    }
}
