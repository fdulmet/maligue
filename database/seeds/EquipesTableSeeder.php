<?php

use Illuminate\Database\Seeder;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([

            [
                'nom' => 'FC Zobs',
                'logo' =>  'images/logo_equipe_lesZobs.jpg',
                'user_id' => 1
            ],
            [
                'nom' => 'FC Quinconces',
                'logo' =>  'images/logo_equipe_FCQuinconces.png',
                'user_id' => 2
            ],
            [
                'nom' => 'FC Jacquos',
                'logo' =>  '',
                'user_id' => 3
            ],
            [
                'nom' => 'Sporting Luis',
                'logo' =>  '',
                'user_id' => 4
            ],
        ]);
    }
}
