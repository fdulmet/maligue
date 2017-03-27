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
            ],
            [
                'nom' => 'Les Matadors',
            ],
            [
                'nom' => 'Les Bretons',
            ],
            [
                'nom' => 'Les Manchots',
            ]
        ]);
    }
}
