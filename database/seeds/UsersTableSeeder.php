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
            'tel' => ('0631099624'),
            'capitaine' => true,
            ],
            [
                'nom' => 'Cambay',
                'prenom' => 'Camille',
                'email' => 'camille@gmail.com',
                'password' => bcrypt('123456'),
                'tel' => ('0612345678'),
                'capitaine' => true,
            ],
            [
                'nom' => 'Binet',
                'prenom' => 'Edouard',
                'email' => 'edouard@gmail.com',
                'password' => bcrypt('123456'),
                'tel' => ('0612345678'),
                'capitaine' => false,
            ],
            [
                'nom' => 'Guelton',
                'prenom' => 'Arthur',
                'email' => 'arthur@gmail.com',
                'password' => bcrypt('123456'),
                'tel' => ('0612345678'),
                'capitaine' => false,
            ]
        ]);
    }
}
