<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'lieu' => 'Le Five Paris',
                'date' => '2017-03-16',
                'heure' => '21:00:00',
                'lieu_report' => 'Le Five Paris',
                'date_report' => '2017-03-16',
                'heure_report' => '21:00:00',
            ],
            [
                'lieu' => 'Le Five Paris',
                'date' => '2017-03-23',
                'heure' => '21:30:00',
                'lieu_report' => 'Le Five Paris',
                'date_report' => '2017-03-23',
                'heure_report' => '21:30:00',
            ]
        ]);
    }
}
