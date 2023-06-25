<?php

use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('merchant')->delete();
        DB::table('merchant')->insert(['name' => 'Easy Restaurant','slug'=>'Restaurant','about'=>'','telephone'=>'33235342342','email'=>'contact@easyrestaurant.com','cuisine'=>'French']);
    }
}
