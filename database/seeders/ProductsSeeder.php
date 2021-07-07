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
            "shoes-img9.png","shoes-img7.png","IMG-20210704-WA0120","IMG-20210704-WA0121","IMG-20210704-WA0122","IMG-20210704-WA0123","IMG-20210704-WA0124.jpg","IMG-20210704-WA0125.jpg","IMG-20210704-WA0126.jpg","IMG-20210704-WA0127.jpg","IMG-20210704-WA0128.jpg","IMG-20210704-WA0129.jpg","IMG-20210704-WA0130.jpg","IMG-20210704-WA0131.jpg","IMG-20210704-WA0132.jpg","IMG-20210704-WA0133.jpg","IMG-20210704-WA0134.jpg","IMG-20210704-WA0135.jpg","IMG-20210704-WA0136.jpg","IMG-20210704-WA0137.jpg","IMG-20210704-WA0138.jpg","IMG-20210704-WA0139.jpg","IMG-20210704-WA0140.jpg","IMG-20210704-WA0141.jpg","IMG-20210704-WA0142.jpg","IMG-20210704-WA0143.jpg","IMG-20210704-WA0144.jpg","IMG-20210704-WA0145.jpg","IMG-20210704-WA0146.jpg","IMG-20210704-WA0147.jpg","IMG-20210704-WA0148.jpg","IMG-20210704-WA0149.jpg","IMG-20210704-WA0150.jpg","IMG-20210704-WA0151.jpg","IMG-20210704-WA0152.jpg","IMG-20210704-WA0152.jpg","IMG-20210704-WA0153.jpg","IMG-20210704-WA0154.jpg","IMG-20210704-WA0155.jpg","IMG-20210704-WA0156.jpg","IMG-20210704-WA0157.jpg","IMG-20210704-WA0158.jpg","IMG-20210704-WA0159.jpg","IMG-20210704-WA0160.jpg","IMG-20210704-WA0161.jpg","IMG-20210704-WA0162.jpg","IMG-20210704-WA0163.jpg","IMG-20210704-WA0164.jpg","IMG-20210704-WA0165.jpg","IMG-20210704-WA0166.jpg","IMG-20210704-WA0167.jpg",
            "IMG-20210704-WA0168.jpg","IMG-20210704-WA0169.jpg","IMG-20210704-WA0170.jpg","IMG-20210704-WA0171.jpg","IMG-20210704-WA0172.jpg",
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
        foreach (range(1,97) as $value) {
            $img = array_rand($array,1);
            DB::table('products')->insert(
                [
                  'product_name'            => $faker->name,
                  'product_description'     => $faker->text,
                  'product_approval'        => 1,
                  'product_img'             => $array[random_int(1,60)],
                  'product_price'           => $faker->numberBetween(100,5000),
                  'product_Qty'             => $faker->numberBetween(50,300),
                  'category_id'             => $categories->random()->id,
                  'updated_at'              => now(),
                  'created_at'              => now(),
                ]
           );
        }
    }
}
