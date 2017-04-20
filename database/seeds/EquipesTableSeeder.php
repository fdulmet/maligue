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
                'nom' => 'La New Team',
                'logo' =>  '',
            ],
            [
                'nom' => 'Les Matadors',
                'logo' =>  '',
            ],
            [
                'nom' => 'Les Bretons',
                'logo' =>  '',
            ],
            [
                'nom' => 'Les Manchots',
                'logo' =>  '',
            ],
            [
                'nom' => 'Les Zobs',
                'logo' =>  '<img src="../../resources/views/content/logo_equipe_lesZobs.png" alt="logo les zobs" style="width:240px;height:149px;">',
            ],
        ]);
    }
}
