<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tablee')->delete();
        DB::table('tablee')->insert(['name' => 'Table 11','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 22','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 33','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 44','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 55','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 66','min'=>'','max'=>'','room'=>'1','status'=>'']);
        DB::table('tablee')->insert(['name' => 'Table 77','min'=>'','max'=>'','room'=>'1','status'=>'']);
    }
}
