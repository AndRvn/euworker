<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    const TABLE = 'experiences';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->delete();

        foreach (config('constants.experience') as $item) {
            \App\Models\Experience::create(['name' => ['en' => $item]]);

            $this->command->info($item  . ' created');
        }
    }
}
