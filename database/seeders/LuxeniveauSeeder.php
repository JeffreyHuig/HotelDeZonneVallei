<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuxeniveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('luxeniveaus')->insert([
            [
                'luxeniveau' => 'Voordeelkamer (Budget / Promo)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luxeniveau' => 'Standaardkamer (Standard)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luxeniveau' => 'Comfort / Superior kamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'luxeniveau' => 'Deluxe kamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
