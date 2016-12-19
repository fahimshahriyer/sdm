<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('teachers')->truncate();

        foreach (range(1,20) as $i){

           Teacher::create([
                'name' => $faker->name,

            ]);
        }
    }
}
