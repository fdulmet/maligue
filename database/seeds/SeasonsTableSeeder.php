<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('seasons')->insert([
        [
          'nom' => 'Automne 2017',
          'slug' => 'automne-2017',
          'ligue_id' => 2,
          'date_start' => \Carbon\Carbon::now(),
          'date_end' => \Carbon\Carbon::now(),
        ]
      ]);
    }
}
