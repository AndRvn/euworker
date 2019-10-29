<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    const LIMIT = 3;

    const TABLE = 'skills';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->delete();

        $count = 0;

        for ($i = 0; $i < 20; $i++) {
            factory(\App\Models\Category::class, self::LIMIT)->create();
            $count += self::LIMIT;

            $this->command->info('Created ' . $count . ' ' . self::TABLE);
        }

    }
}
