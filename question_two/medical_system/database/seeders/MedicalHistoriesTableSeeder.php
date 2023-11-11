<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalHistory;
use Faker\Factory as Faker;

class MedicalHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=MedicalHistoriesTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            MedicalHistory::create([

                'created_by' => $faker->randomElement(['wandie', 'innocent', 'wenareeba']),
                'patient_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'allergies' => $faker->randomElement(['itching', 'cold weather']),
                'past_diagnosis' => $faker->randomElement(['malaria', 'typhoid']),
                'present_diagnosis' => $faker->randomElement(['flue', 'cough']),
                'family_history' => $faker->randomElement(['sickle cell', 'cancer problem']),
                'past_medical_history' => $faker->randomElement(['fine', 'fair']),
                'surgical_history' => $faker->randomElement(['10 times', 'during pregnauncy']),
                'problematic_medicine' => $faker->randomElement(['panadol', 'aspirin']),
                'date_of_last_medical_facility_visit' => $faker->randomElement(['2023/2/5', '2023/8/5']),
                'scan_history' => $faker->randomElement(['last year', 'none']),
                'last_medical_facility_visited' => $faker->randomElement(['benedict medical', 'naguru']),
                'immunization_history' => $faker->randomElement(['at 2 years', 'at 4 years']),
                'history_of_illness' => $faker->randomElement(['low blood pressure', 'sickle cells']),
                'past_lab_results' => $faker->randomElement(['stable blood ', 'HIV free']),
                'last_recommended_medicine' => $faker->randomElement(['aspirin', 'vitamn C']),

            ]);
        }
    }
}
