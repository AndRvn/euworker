<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ExperienceTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(RentsTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
    }
}
