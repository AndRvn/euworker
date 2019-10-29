<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    const TABLE = 'countries';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->delete();

        foreach (config('constants.countries') as $item) {
            \App\Models\Location\Country::create(['name' => ['en' => $item]]);

            $this->command->info($item  . ' created');

        }
    }
}
