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
                'equipe_id' => 1,
                'game_id' => 1,
                'buts' => null,
            ],
            [
                'equipe_id' => 2,
                'game_id' => 1,
                'buts' => null,
            ],
            [
                'equipe_id' => 3,
                'game_id' => 2,
                'buts' => 4,
            ],
            [
                'equipe_id' => 2,
                'game_id' => 2,
                'buts' => 5,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 3,
                'buts' => 3,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 3,
                'buts' => 2,
            ],
            [
                'equipe_id' => 2,
                'game_id' => 4,
                'buts' => 2,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 4,
                'buts' => 2,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 5,
                'buts' => 1,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 5,
                'buts' => 1,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 6,
                'buts' => 3,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 6,
                'buts' => 4,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 7,
                'buts' => 3,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 7,
                'buts' => 4,
            ],

        ]);
    }
}
