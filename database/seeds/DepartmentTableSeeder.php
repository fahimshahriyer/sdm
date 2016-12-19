<?php

use Illuminate\Database\Seeder;
use App\Department;
use Faker\Factory;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('departments')->truncate();

        $departments = ['CSE','EEE','ETE'];

        foreach ($departments as $department){
            Department::create([
                'name' => $department,
                'teacher_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
