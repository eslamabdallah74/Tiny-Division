<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1,16) as $value) {
            DB::table('products')->insert(
                [
                  'product_name'            => $faker->streetName,
                  'product_description'     => $faker->realText($maxNbChars = 200, $indexSize = 2),
                  'product_approval'        => 0,
                  'product_img'             => $faker->imageUrl($width = 200, $height = 200),
                  'product_price'           => $faker->numberBetween($min = 100, $max = 500),

                ]
           );
        }
    }
}
