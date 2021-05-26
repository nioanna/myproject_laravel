<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResidentialBuilding;

class ResidentailBuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResidentialBuilding::truncate();

        $faker = \Faker\Factory::create();

        for($i=0; $i<50;$i++) {
            ResidentialBuilding::create([
                'street'=> $faker->streetAddress,
                'city'=> $faker->city,
                'square_footage' => $faker->numberBetween(10,1000),
                'price'=>$faker->numberBetween(10, 10000),
                'rooms_number'=>$faker->randomDigit,
                'parking_spaces'=>$faker->randomDigit,
                'category'=>$faker->randomElement(['Sell','Rent']),
                'user_id'=>\App\Models\User::all()->random()->id,
            ]);

        }
    }
}
