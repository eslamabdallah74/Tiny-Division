<?php

namespace Database\Seeders;

use App\Models\category;
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
        $array = [
            "shoes-img1.png","shoes-img2.png","shoes-img3.png","shoes-img4.png","shoes-img6.png","running-shoes.png",
            "shoes-img9.png","shoes-img7.png"
        ];

        $faker       = Faker::create();
        foreach (range(1,4) as $value) {
            DB::table('categories')->insert(
                [
                  'category_name'  => $faker->company,
                ]
           );
        }
        $categories  = category::all();
        foreach (range(1,16) as $value) {
            $img = array_rand($array,1);
            DB::table('products')->insert(
                [
                  'product_name'            => $faker->name,
                  'product_description'     => $faker->text,
                  'product_approval'        => $faker->boolean,
                  'product_img'             => $array[$img],
                  'product_price'           => $faker->numberBetween(100,5000),
                  'product_Qty'             => $faker->numberBetween(50,300),
                  'category_id'             => $categories->random()->id,
                ]
           );
        }
    }
}
