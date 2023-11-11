<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalPractitioner;
use Faker\Factory as Faker;

class MedicalPractitionersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=MedicalPractitionersTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            MedicalPractitioner::create([

                'first_name' => $faker->randomElement(['wandie', 'innocent', 'wenareeba']),
                'last_name' => $faker->randomElement(['wandie', 'innocent', 'wenareeba']),
                'contact' => $faker->randomElement(['0700552255', '0700552255']),
                'address' => $faker->randomElement(['kampala', 'kisaasi']),
                'designation' => $faker->randomElement(['doctor', 'nurse']),


            ]);

    }
}
}
