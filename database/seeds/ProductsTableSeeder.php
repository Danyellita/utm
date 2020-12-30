<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\Region;
use App\Pharmacy;

class ProductsTableSeeder extends Seeder
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
            Product::create([
            	'name' => $faker->name,
            	'category_id' => Category::all()->shuffle()->first()->id,
            	'composition' => 'test',
            	'region_id' => Region::all()->shuffle()->first()->id,
            	'packing_quantity' => 'test',
            	'weight' => $faker->numberBetween(100,1000),
            	'product_measurement' => 'test',
            	'pharmacy_id' => Pharmacy::all()->shuffle()->first()->id,
            ]);
        }
    }
}
