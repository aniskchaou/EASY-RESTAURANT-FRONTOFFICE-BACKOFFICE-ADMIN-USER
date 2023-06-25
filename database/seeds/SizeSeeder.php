<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->delete();
        DB::table('size')->insert(['name' => 'Small']);
        DB::table('size')->insert(['name' => 'Medium']);
        DB::table('size')->insert(['name' => 'Large']);
    }
}
