<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstName' => 'Bart',
            'lastName' => 'Vink',
            'phone' => '0612345678',
            'email' => 'b.vink@hoteldezonnevallei.com',
            'password' => 'password',
        ]);
    }
}
