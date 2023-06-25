<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kitchen')->delete();
        DB::table('kitchen')->insert(['name' => 'French']);
        DB::table('kitchen')->insert(['name' => 'Korean']);
        DB::table('kitchen')->insert(['name' => 'Mexican']);
    }
}
