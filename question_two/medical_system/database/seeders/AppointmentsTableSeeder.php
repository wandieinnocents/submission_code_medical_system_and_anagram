<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use Faker\Factory as Faker;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=AppointmentsTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            Appointment::create([

                'medical_practitioner_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'patient_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
                'appointment_date' => $faker->randomElement(['2023/2/5 ', '2023/3/5', '2023/2/8', '2023/12/5', '2023/12/7']),
                'reason_of_appointment' => $faker->randomElement(['sick ', 'Health Monitoring', 'Cancer Issue']),
                'detailed_description_of_issue' => $faker->randomElement(['i have serious mental problem ', 'My health is misbehaving', 'Cancer Issue']),
                'clinical_notes' => $faker->randomElement(['Patient needs attention ', 'Patient is ill', 'Gentleman has serious Issue']),
                'appointment_time' => $faker->randomElement(['9:00 AM ', '10:00 PM', '12:50 AM']),
                'appointment_status' => $faker->randomElement(['pending ', 'complete', 'cancelled']),
                'created_by' => $faker->randomElement(['wandie ', 'innocent', 'wenareeba']),
            ]);
        }
    }
}
