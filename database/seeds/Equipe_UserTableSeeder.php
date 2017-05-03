<?php

use Illuminate\Database\Seeder;

class Equipe_UserTableSeeder extends Seeder
{
    //php artisan make:seeder UsersTableSeeder
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipe_user')->insert([
            [
                'equipe_id' => '1',
                'user_id' => '1',
            ],

            [
                'equipe_id' => '1',
                'user_id' => '2',
            ],
            /*
        [
            'equipe_id' => '2',
            'user_id' => '3',
        ],
        [
            'equipe_id' => '1',
            'user_id' => '4',
        ],
        [
            'equipe_id' => '3',
            'user_id' => '5',
        ],
        [
            'equipe_id' => '4',
            'user_id' => '6',
        ],
        [
            'equipe_id' => '5',
            'user_id' => '7',
        ],
        [
            'equipe_id' => '5',
            'user_id' => '8',
        ],
        [
            'equipe_id' => '5',
            'user_id' => '9',
        ],
        [
            'equipe_id' => '5',
            'user_id' => '10',
        ],
        */
        ]);
    }
}
