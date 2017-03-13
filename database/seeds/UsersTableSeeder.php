<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'nom' => 'Dulmet',
            'prenom' => 'François',
            'email' => 'fdulmet@gmail.com',
            'password' => bcrypt('576925'),
            ],
            [
                'nom' => 'Cambay',
                'prenom' => 'Camille',
                'email' => 'camille@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'Binet',
                'prenom' => 'Edouard',
                'email' => 'edouard@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'Guelton',
                'prenom' => 'Arthur',
                'email' => 'arthur@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
