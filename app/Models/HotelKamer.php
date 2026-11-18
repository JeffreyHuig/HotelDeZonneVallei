<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HotelKamer extends Model
{
    /** @use HasFactory<\Database\Factories\HotelKamerFactory> */
    use HasFactory;

    public function bezetting(): HasOne
    {
        return $this->hasOne(Bezetting::class);
    }

    public function luxeniveau(): HasOne
    {
        return $this->hasOne(Luxeniveau::class);
    }

    public function suiteIndeling(): HasOne
    {
        return $this->hasOne(SuiteIndeling::class);
    }

    public function liggingExtra(): HasOne
    {
        return $this->hasOne(LiggingExtra::class);
    }
}
