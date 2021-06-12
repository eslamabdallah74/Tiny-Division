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
        foreach (range(1,10) as $value) {
            DB::table('products')->insert(
                [
                  'product_name'            => $faker->name,
                  'product_description'     => $faker->text,
                  'product_status'          => 0,
                  'product_img'             => $faker->imageUrl($width = 200, $height = 200),
                  'product_price'           => $faker->randomDigit,
                  'created_at'              => $faker->date,

                ]
           );
        }
    }
}
