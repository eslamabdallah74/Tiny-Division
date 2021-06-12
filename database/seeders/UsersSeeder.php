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
        $admin = Faker::create();
        foreach (range(0,0) as $value) {
            DB::table('users')->insert(
                [
                  'name'       => 'Eslam Abdallah',
                  'email'      => 'eslamabdallah301@gmail.com',
                  'password'   => Hash::make('eslam1020'),              //Hash::make('yomi2020'),
                  'created_at' => $admin->date,

                ]
           );
        }

       $faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('users')->insert(
                [
                  'name'       => $faker->name,
                  'email'      => $faker->email,
                  'password'   => $faker->password,              //Hash::make('yomi2020'),
                  'created_at' => $faker->date

                ]
           );
        }
    }
}
