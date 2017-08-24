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
            //Zobs
        [
            'nom' => 'Delaborde',
            'prenom' => 'Mathias',
            'tel' => '0165656565',
            'email' => 'mathias.delaborde@gmail.com',
            'password' => bcrypt('123456'),
        ],
        [
            'nom' => 'Dulmet',
            'prenom' => 'François',
            'tel' => '0631099624',
            'email' => 'fdulmet@gmail.com',
            'password' => bcrypt('123456'),
        ],
        [
            'nom' => 'Jacquemard',
            'prenom' => 'Thomas',
            'tel' => '0165656565',
            'email' => 'thomas@gmail.com',
            'password' => bcrypt('123456'),
        ],
        [
            'nom' => 'Guerrini',
            'prenom' => 'Luis',
            'tel' => '0165656565',
            'email' => 'luis@gmail.com',
            'password' => bcrypt('123456'),
        ],
        [
            'nom' => 'Mesmene',
            'prenom' => 'Yannis',
            'tel' => '0165656565',
            'email' => 'yannis@gmail.com',
            'password' => bcrypt('123456'),
        ],

    /*
    [
        'nom' => 'Marlasca',
        'prenom' => 'Esteban',
        'capitaine' => false,
        'tel' => ('0612345678'),
        'email' => 'esteban@gmail.com',
        'password' => bcrypt('123456'),
    ],
    [
        'nom' => 'Khaless',
        'prenom' => 'Mathieu',
        'capitaine' => false,
        'tel' => ('0612345678'),
        'email' => 'mathieu@gmail.com',
        'password' => bcrypt('123456'),
    ],
    [
        'nom' => 'Trichet',
        'prenom' => 'Jules',
        'capitaine' => false,
        'tel' => ('0612345678'),
        'email' => 'jules@gmail.com',
        'password' => bcrypt('123456'),
    ],
    */

            /*Pingouins
           [
                'nom' => 'Dulmet',
                'prenom' => 'François',
                'capitaine' => true,
                'tel' => ('0631099624'),
                'email' => 'fdulmet@gmail.com',
                'password' => bcrypt('576925'),
            ],
            [
                'nom' => 'Cambay',
                'prenom' => 'Camille',
                'capitaine' => true,
                'tel' => ('0612345678'),
                'email' => 'camille@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'Binet',
                'prenom' => 'Edouard',
                'capitaine' => false,
                'tel' => ('0612345678'),
                'email' => 'edouard@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'Guelton',
                'prenom' => 'Arthur',
                'capitaine' => false,
                'tel' => ('0612345678'),
                'email' => 'arthur@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'Menguy',
                'prenom' => 'Alexandre',
                'capitaine' => true,
                'tel' => ('0612345678'),
                'email' => 'alexandre@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'nom' => 'de la Bourdonnaye',
                'prenom' => 'Charles',
                'capitaine' => true,
                'tel' => ('0612345678'),
                'email' => 'charles@gmail.com',
                'password' => bcrypt('123456'),
            ],
            */
        ]);
    }
}
