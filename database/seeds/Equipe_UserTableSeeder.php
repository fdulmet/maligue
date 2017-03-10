<?php

use Illuminate\Database\Seeder;

class Equipe_UserTableSeeder extends Seeder
{
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
                'equipe_id' => '2',
                'user_id' => '2',
            ],
            [
                'equipe_id' => '2',
                'user_id' => '3',
            ],
            [
                'equipe_id' => '1',
                'user_id' => '4',
            ]
        ]);
    }
}
