<?php

use Illuminate\Database\Seeder;

class RentsTableSeeder extends Seeder
{
    const LIMIT = 5;

    const TABLE = 'rents';

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
            $test = factory(\App\Models\Rent::class, self::LIMIT)->create();

            $count += self::LIMIT;

            $this->command->info('Created ' . $count . ' ' . self::TABLE);
        }

    }
}
