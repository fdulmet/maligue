<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EquipesTableSeeder::class);
        $this->call(LiguesTableSeeder::class);
        $this->call(Equipe_UserTableSeeder::class);
        $this->call(Equipe_LigueTableSeeder::class);
    }
}
