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
                'omschrijving' => 'Een kamer met één bed, bedoeld voor één persoon.',
            ],
            [
                'bezettingstype' => 'Tweepersoonskamer (Double)',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een kamer voor twee personen met één groot (tweepersoons- of kingsize) bed.',
            ],
            [
                'bezettingstype' => 'Twin-Kamer',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een tweepersoonskamer, maar dan met twee losse bedden.',
            ],
            [
                'bezettingstype' => 'Driepersoonskamer (Triple)',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een kamer voor drie personen, met een combinatie van een tweepersoonsbed en een los bed (of een slaapbank).',
            ],
            [
                'bezettingstype' => 'Vierpersoonskamer (Quad)',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een kamer voor vier personen, uitgerust met meerdere bedden of stapelbedden.',
            ],
            [
                'bezettingstype' => 'Familiekamer',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een ruimere kamer of geschakelde kamers, speciaal ingericht voor gezinnen met kinderen.',
            ],
            [
                'bezettingstype' => 'Executive Kamer',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een kamer speciaal gericht op zakenreizigers, voorzien van een goede werkplek en toegang tot een executive lounge.',
            ],
            [
                'bezettingstype' => 'Bruidssuite',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'Een romantisch ingerichte suite met extra luxe voorzieningen, zoals een bubbelbad of jacuzzi op de kamer.',
            ],
            [
                'bezettingstype' => 'Presidentiële suite / Penthouse',
                'created_at' => now(),
                'updated_at' => now(),
                'omschrijving' => 'De grootste en meest exclusieve kamer van het hotel, op de bovenste verdieping met panoramisch uitzicht en vele extra diensten.',
            ],
        ]);
    }
}
