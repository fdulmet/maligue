<?php

use Illuminate\Database\Seeder;

class LiguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligues')->insert([
            [
                'nom' => 'La Ligue des Pingouins',
                'sport' => 'Foot-à-5',
            ],
            [
                'nom' => 'Ligue SMP',
                'sport' => 'Foot-à-5',
            ],

        ]);
    }
}
