<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    	
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('customer')->delete();
        DB::table('customer')->insert(['name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6)]);
        DB::table('customer')->insert(['name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6)]);
        DB::table('customer')->insert(['name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6)]);
    }
}
