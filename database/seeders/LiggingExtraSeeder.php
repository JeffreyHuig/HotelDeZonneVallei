<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiggingExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ligging_extras')->insert([
            [
                'ligging/extras' => 'Swim-up kamer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ligging/extras' => 'Bruidssuite',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ligging/extras' => 'Zicht over land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ligging/extras' => 'Zicht op tuin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ligging/extras' => 'Zicht op zwembad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ligging/extras' => 'Zicht op zee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
