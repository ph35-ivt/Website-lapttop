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
      //$this->call(UsersTableSeeder::class);
      $this->call(SliderTableSeeder::class);
      $this->call(NewsTableSeeder::class);
    	$this->call(CustomerTableSeeder::class);
    	$this->call(CategoriesTableSeeder::class);
      $this->call(ProductsTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
      $this->call(Order_detailsTableSeeder::class);
      $this->call(OrdersTableSeeder::class);
    }
}
