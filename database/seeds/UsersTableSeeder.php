<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    const LIMIT = 5;

    const TABLE = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->delete();

        $count = 0;

        for ($i = 0; $i < 50; $i++) {
            factory(\App\User::class, self::LIMIT)->create();
            $count += self::LIMIT;

            $this->command->info('Created ' . $count . ' ' . self::TABLE);
        }

        $this->createAdmin();
    }

    protected function createAdmin()
    {
        $admin = \App\User::create(
            [
                'name' => 'admin',
                'email' => 'admin@euworker.com',
                'password' => 'secret',
                'email_verified_at' => now(),
            ]);

        $admin->assignRole(\App\User::ROLE_ADMIN);

        $this->command->info('Created admin');

    }
}
