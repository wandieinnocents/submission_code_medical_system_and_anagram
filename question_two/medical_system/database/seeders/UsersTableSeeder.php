<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // how to run the seeder
        // php artisan db:seed --class=UsersTableSeeder

        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            User::create([
                'name' => $faker->randomElement(['Joseph', 'Julius','Innocent','Peter']),
                'email' => $faker->randomElement(['joseph@gmail.com', 'innocent@gmail.com','peter@gmail.com','julilus@gmail.com']),
                'password' => $faker->randomElement([bcrypt('wandie22') , bcrypt('innocent2') , bcrypt('joseph5'), bcrypt('peterK')]),
                // 'password' => bcrypt('wandie22')
            ]);
        }
    }
}
