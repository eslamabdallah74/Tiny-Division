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
       DB::table('users')->insert(
           [
             'name' => $faker->name,
             'email' => "eslamabdallah301@gmail.com",
             'password' => Hash::make('yomi2020'),
             'admin' => 1

           ]
           );
    }
}
