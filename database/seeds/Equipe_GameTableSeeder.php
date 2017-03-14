<?php

use Illuminate\Database\Seeder;

class Equipe_GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipe_game')->insert([
            [
                'equipe_id' => '1',
                'game_id' => '1',
                'buts' => '10',
            ],
            [
                'equipe_id' => '2',
                'game_id' => '1',
                'buts' => '8',
            ],
            [
                'equipe_id' => '3',
                'game_id' => '2',
                'buts' => '15',
            ],
            [
                'equipe_id' => '1',
                'game_id' => '2',
                'buts' => '11',
            ]
        ]);
    }
}
