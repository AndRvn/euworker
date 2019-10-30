<?php

use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    const LIMIT = 20;

    const TABLE = 'vacancies';

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
            factory(\App\Models\Vacancy::class, self::LIMIT)->create();

            $count += self::LIMIT;

            $this->command->info('Created ' . $count . ' ' . self::TABLE);
        }

    }
}
