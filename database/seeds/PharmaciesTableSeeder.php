<?php

use Illuminate\Database\Seeder;
use App\Pharmacy;
use App\Street;

class PharmaciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 4; ++$i){
            Pharmacy::create([
            	'name' => $faker->name,
            	'phone' => $faker->numberBetween(100,1000),
            	'emial' => 'test@mail.com',
            	'site' => 'test.md',
            	'working_time' => $faker->numberBetween(100,1000),
            	'street_id' => Street::all()->shuffle()->first()->id,
            ]);
        }	
    }
}
