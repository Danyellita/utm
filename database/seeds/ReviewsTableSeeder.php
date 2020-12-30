<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\Product;

class ReviewsTableSeeder extends Seeder
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
            Review::create([
            	'rating' => $faker->numberBetween(1,5),
            	'reviews_comments' => 'test',
            	'product_id' => Product::all()->shuffle()->first()->id,
            ]);
        }
    }
}
