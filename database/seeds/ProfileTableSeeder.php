<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    const LIMIT = 5;

    const TABLE = 'profiles';

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
            factory(\App\Models\Profile::class, self::LIMIT)->create();
            $count += self::LIMIT;

            $this->command->info('Created ' . $count . ' ' . self::TABLE);
        }

        $this->populateSkills();
    }

    protected function populateSkills()
    {
        $skills = \App\Models\Skill::all();

        foreach (\App\Models\Profile::all() as $profile) {
            $skillsArr = $skills->random(3);

            $profile->skills()->sync($skillsArr);

            $this->command->info('add skills for resume id - ' . $profile->id);
        }
    }

}
