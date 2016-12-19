<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('users')->truncate();

        User::create([
            'name' => 'Asma Akter Nabeela',
            'email' => 'asma@nabeela.com',
            'password' => bcrypt('secret')

        ]);

        foreach (range(1,50) as $i){

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
