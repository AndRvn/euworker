<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
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

        foreach (config('constants.cities') as $item) {

            \App\Models\Location\City::create(['name' => ['en' => $item['name']], 'country_id' => $item['country_id']]);

            $this->command->info($item['name']  . ' created');

        }
    }
}
