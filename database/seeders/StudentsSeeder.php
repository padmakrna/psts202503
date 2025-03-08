<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
            for ($i=0; $i < 100; $i++) { 
                \App\Models\Students::create([
                    'name' => $faker->name,
                    'gender' => $faker->randomElement(['male', 'female']),
                    'email' => $faker->safeEmail,
                    'phone' => '0'.$faker->numberBetween(81100000000, 855799999999),
                    'grade' => $faker->numberBetween(10, 12),
                ]);
            }
    }
}
