<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
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
            DB::table('users')->insert(
                [
                  'name'       => $faker->name,
                  'email'      => $faker->email,
                  'password'   => $faker->password,              //Hash::make('yomi2020'),
                  'admin'      => 0,
                  'created_at' => $faker->date

                ]
           );
        }
    }
}
