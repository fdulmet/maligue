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
                'buts' => 10,
            ],
            [
                'equipe_id' => 2,
                'game_id' => 1,
                'buts' => 8,
            ],
            [
                'equipe_id' => 3,
                'game_id' => 2,
                'buts' => 25,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 2,
                'buts' => 14,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 3,
                'buts' => 4,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 3,
                'buts' => 5,
            ],
            [
                'equipe_id' => 2,
                'game_id' => 4,
                'buts' => 13,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 4,
                'buts' => 12,
            ],
            [
                'equipe_id' => 1,
                'game_id' => 5,
                'buts' => 10,
            ],
            [
                'equipe_id' => 4,
                'game_id' => 5,
                'buts' => 19,
            ],

        ]);
    }
}
