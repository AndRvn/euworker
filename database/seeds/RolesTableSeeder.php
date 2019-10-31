<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    const TABLE = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->delete();

        Role::create([ 'name' => User::ROLE_ADMIN ]);
        Role::create([ 'name' => User::ROLE_MODERATOR ]);
        Role::create([ 'name' => User::ROLE_CLIENT ]);
        Role::create([ 'name' => User::ROLE_CUSTOMER ]);
    }
}
