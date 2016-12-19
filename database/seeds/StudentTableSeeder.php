<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('students')->truncate();

        foreach (range(1,50) as $i){

            Student::create([
                'name' => $faker->name,
                'roll' => $faker->randomNumber(8),
                'registration_no' => $faker->randomNumber(3),
                'birth_date' => $faker->dateTimeBetween('-30 years', 'now'),
                'department_id' => $faker->numberBetween(1,3),
                'batch_id' => $faker->numberBetween(1,7),
                'mobile_no' => $faker->phoneNumber,
                'address' => $faker->address
            ]);
        }
    }
}
