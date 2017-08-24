<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'title' => 'Administrateur',
                'level' => Role::ADMIN,
            ],
            [
                'name' => 'admin_ligue',
                'title' => 'Administrateur de ligue',
                'level' => Role::ADMIN_LIGUE,
            ],
            [
                'name' => 'capitaine',
                'title' => 'Capitaine',
                'level' => Role::CAPITAINE,
            ],
            [
                'name' => 'joueur',
                'title' => 'Joueur',
                'level' => Role::JOUEUR,
            ],
        ]);

        DB::table('role_user')->insert([
            [
                'role_id' => Role::ADMIN,
                'user_id' => 2,
            ],
        ]);
    }
}
