<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    const LIMIT = 2;
    const TABLE = 'categories';

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
