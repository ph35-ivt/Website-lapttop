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
       
       $this->call(NewsTableSeeder::class);
         $this->call(SliderTableSeeder::class);
    	$this->call(CategoriesTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
       $this->call(OrdersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(Order_detailsTableSeeder::class);
        $this->call(RepairTableSeeder::class);
    }
}
