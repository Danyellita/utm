<?php

use Illuminate\Database\Seeder;
use App\Street;
use App\Sector;

class StreetsTableSeeder extends Seeder
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
            Street::create([
            	'name' => $faker->name,
            	'sector_id' => Sector::all()->shuffle()->first()->id,
            ]);
        }
    }
}
