<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        //make sure everyone has the same password and 
        //hash it before the loop or else our seeder 
        //will be too slow

        $password = Hash::make('toptal');

        User::create([
            'name' =>'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        //generate a few dozen users for our app:
        for($i=0; $i<10; $i++) {
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$password,
            ]);
        }
    }
}