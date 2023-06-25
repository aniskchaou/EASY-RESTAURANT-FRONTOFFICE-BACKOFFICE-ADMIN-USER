<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
         $this->call(UsersTableSeeder::class);
         $this->call(KitchenSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(AddonsSeeder::class);
         $this->call(FoodSeeder::class);
         $this->call(FoodTypeSeeder::class);
         $this->call(MerchantSeeder::class);
         $this->call(OfferSeeder::class);
         $this->call(RoomSeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(SupplierSeeder::class);
         $this->call(TableReservationSeeder::class);
         $this->call(TableSeeder::class);
        
    }
}
