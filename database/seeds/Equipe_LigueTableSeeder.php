<?php

use Illuminate\Database\Seeder;

class Equipe_LigueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipe_ligue')->insert([
            [
                'equipe_id' => '1',
                'ligue_id' => '1',
            ],
            [
                'equipe_id' => '2',
                'ligue_id' => '1',
            ],
        ]);
    }
}
