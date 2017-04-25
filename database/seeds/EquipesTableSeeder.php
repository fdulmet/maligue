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
                'nom' => 'Les Zobs',
                'logo' =>  '../../resources/views/content/logo_equipe_lesZobs.png',
            ],
            [
                'nom' => 'Les Zobs 2',
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
