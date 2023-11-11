<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LabResult;
use Faker\Factory as Faker;

class LabResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=LabResultsTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            LabResult::create([

                'patient_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'medical_practitioner_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'hiv' => $faker->randomElement(['positive', 'negative',]),
                'urinalysis' => $faker->randomElement(['fine', 'brown', 'yellow']),
                'blood_tests' => $faker->randomElement(['clean', 'sick', 'cancer']),
                'sputum_tests' => $faker->randomElement(['sick ', 'Health Monitoring', 'Cancer Issue']),
                'fecel_tests' => $faker->randomElement(['i have serious mental problem ', 'My health is misbehaving', 'Cancer Issue']),
            ]);
        }
    }
}
