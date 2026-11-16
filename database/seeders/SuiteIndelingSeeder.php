<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuiteIndelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suite_indelings')->insert([
            [
                'kamerindeling' => 'Junior Suite',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamerindeling' => 'Suite',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamerindeling' => 'Presidentiële Suite / Penthouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamerindeling' => 'Studio / Appartement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamerindeling' => 'Duplex kamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
