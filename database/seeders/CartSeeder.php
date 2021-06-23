<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users    = User::all();
        $products = Products::all();
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            $userID = $users->random()->id;
            $CartID = DB::table('carts')->insertGetId(
                [
                  'total'       => $faker->numberBetween(100,10000),
                  'user_id'     => $userID
                ]
           );
           foreach(range(1,3) as $value){
                $Qty     = $faker->numberBetween(1,15);
                $price   = $faker->numberBetween(100,1000);
                DB::table('cart_products')->insert(
                    [
                        'cart_id'       => $CartID,
                        'user_id'       => $userID,
                        'product_id'    => $products->random()->id,
                        'total'         => $price * $Qty,
                        'price'         => $price,
                        'Qty'           => $Qty
                    ]
                );
           }
        }
    }
}
