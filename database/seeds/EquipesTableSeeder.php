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
            ],
            [
                'nom' => 'FC Quinconces',
                'logo' =>  'images/logo_equipe_FCQuinconces.jpg',
            ],
            [
                'nom' => 'FC Jacquos',
                'logo' =>  '',
            ],
            [
                'nom' => 'Sporting Luis',
                'logo' =>  '',
            ],
        ]);
    }
}
