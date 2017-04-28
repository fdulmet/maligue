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
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-04-24',
                'heure' => '18:00:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-16',
                'heure_report' => '21:00:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-01',
                'heure' => '17:00:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-16',
                'heure_report' => '21:00:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-04',
                'heure' => '17:15:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-23',
                'heure_report' => '21:30:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-10',
                'heure' => '16:45:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-04-06',
                'heure_report' => '21:00:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-10',
                'heure' => '16:45:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-30',
                'heure_report' => '20:30:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-17',
                'heure' => '16:45:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-30',
                'heure_report' => '20:30:00',
            ],
            [
                'lieu' => 'Urbansoccer La Défense',
                'date' => '2017-05-22',
                'heure' => '16:45:00',
                'lieu_report' => 'Urbansoccer La Défense',
                'date_report' => '2017-03-30',
                'heure_report' => '20:30:00',
            ],

        ]);
    }
}
