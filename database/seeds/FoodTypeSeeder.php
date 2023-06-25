<?php

use Illuminate\Database\Seeder;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_type')->delete();
        DB::table('food_type')->insert(['name' => 'Vegetable']);
        DB::table('food_type')->insert(['name' => 'Non vegetable']);
    }
}
