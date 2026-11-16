<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BezettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bezettings')->insert([
            [
                'bezettingstype' => 'Eenpersoonskamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bezettingstype' => 'Tweepersoonskamer (Double)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bezettingstype' => 'Twin-Kamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bezettingstype' => 'Driepersoonskamer (Triple)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bezettingstype' => 'Vierpersoonskamer (Quad)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bezettingstype' => 'Familiekamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
