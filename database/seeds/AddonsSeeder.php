<?php

use Illuminate\Database\Seeder;

class AddonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('addons')->delete();
        DB::table('addons')->insert(['name' => 'Onion','price'=>'4','description'=>'','status'=>'Active']);
        DB::table('addons')->insert(['name' => 'Pepper','price'=>'4','description'=>'','status'=>'Active']);
        DB::table('addons')->insert(['name' => 'Salt','price'=>'4','description'=>'','status'=>'Active']);
        DB::table('addons')->insert(['name' => 'Sauce','price'=>'4','description'=>'','status'=>'Active']);
        DB::table('addons')->insert(['name' => 'Lemon','price'=>'4','description'=>'','status'=>'Active']);
        DB::table('addons')->insert(['name' => 'Ketchup','price'=>'4','description'=>'','status'=>'Active']);
    }
}
