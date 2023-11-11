<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalRecord;
use Faker\Factory as Faker;

class MedicalRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=MedicalRecordsTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            MedicalRecord::create([

                'patient_id' => $faker->randomElement(['1', '3', '5']),
                'lab_test_results_id' => $faker->randomElement(['1', '2', '5']),
                'medical_practitioner_id' => $faker->randomElement(['1', '2', '5']),
                'symptoms' => $faker->randomElement(['diarrhoea', 'weakness', 'loosing weight']),
                'medical_condition_diagnosed' => $faker->randomElement(['typhoid', 'malaria', 'headache']),
                'treatment_given' => $faker->randomElement(['panadol', 'injection', 'admission']),
                'visit_outcome' => $faker->randomElement(['recovered', 'failed', 'problematic']),
                'patient_status' => $faker->randomElement(['0', '1', '2']),
                'blood_pressure' => $faker->randomElement(['low', 'moderate', 'high']),
                'temperature' => $faker->randomElement(['normal', 'high', 'low']),
                'weight' => $faker->randomElement(['50kg', '100kg', '200kg']),
                'height' => $faker->randomElement(['3 ft', '6ft', '9ft']),
                'created_by' => $faker->randomElement(['wandie', 'innocent', 'wenareeba']),
                'comment_on_patient' => $faker->randomElement(['will recover', 'will take time', 'complicated']),
                'date_of_record' => $faker->randomElement(['2023/02/05', '2023/06/05', '2023/09/05']),
                'prescribed_medicine' => $faker->randomElement(['aspirin', 'panadol', 'mabendazol']),


            ]);

    }
}
}
