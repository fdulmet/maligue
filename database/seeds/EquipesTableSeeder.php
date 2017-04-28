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
                'logo' =>  'public/logo_equipe_lesZobs.jpg',
            ],
            [
                'nom' => 'FC Quinconces',
                'logo' =>  '',
            ],
            [
                'nom' => 'Equipe Thomas',
                'logo' =>  '',
            ],
            [
                'nom' => 'Equipe Luis',
                'logo' =>  '',
            ],

        ]);
    }
}
