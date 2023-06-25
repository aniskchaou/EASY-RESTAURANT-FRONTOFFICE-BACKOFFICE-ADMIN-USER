<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert(['name' => 'Soups']);
        DB::table('category')->insert(['name' => 'Starter']);
        DB::table('category')->insert(['name' => 'Salades']);
        DB::table('category')->insert(['name' => 'Beverage']);
        DB::table('category')->insert(['name' => 'Kebabs']);
        DB::table('category')->insert(['name' => 'Sandwiches']);
        DB::table('category')->insert(['name' => 'Curries']);
    }
}
