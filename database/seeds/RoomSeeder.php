<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->delete();
        DB::table('room')->insert(['name' => 'Room 01','capacity'=>'','status'=>'']);
        DB::table('room')->insert(['name' => 'Room 02','capacity'=>'','status'=>'']);
        DB::table('room')->insert(['name' => 'Room 03','capacity'=>'','status'=>'']);
    }
}
