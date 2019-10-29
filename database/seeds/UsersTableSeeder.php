<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    const LIMIT = 1;

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

    }
}
