<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,40) as $index)
        {
            DB::table('applicants')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'position' => $faker->randomElement(['DEVELOPER', 'POLICE', 'DOCTOR']),
                'phone' => $faker->randomNumber($nbDigits = 9),
                'is_hired' => $faker->boolean()
            ]);
        }
    }
}
