<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;



class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=PatientsTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            Patient::create([

                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'occupation' => $faker->randomElement(['Software Developer', 'Designer']),
                'nationality' => $faker->randomElement(['Ugandan', 'Kenyan']),
                'address' => $faker->randomElement(['Kampala', 'Bweyogerere', 'mbarara']),
                'next_of_kin_name' => $faker->randomElement(['Innocent', 'Kavuma', 'Joshua']),
                'next_kin_contact' => $faker->randomElement(['07000552255', '07000552255', '07000552255']),
                'patient_contact' => $faker->randomElement(['08552255', '08552255', '08552255']),
                'email' => $faker->randomElement(['innocent@gmail.com', 'wandie@gmail.com']),
                'hereditary_diseases_available' => $faker->randomElement(['malaria', 'typhoid', 'brusella']),
                'created_by' => $faker->randomElement(['inocent', 'wandie', 'wenareba']),

            ]);
        }
    }
}
