<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
    	$faker = Faker\Factory::create();
       
        DB::table('orders')->insert([
           'customer_id'=> rand(1, 4),
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('orders')->insert([
           'customer_id'=> rand(1, 4),
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('orders')->insert([
           'customer_id'=> rand(1, 4),
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('orders')->insert([
           'customer_id'=> rand(1, 4),
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
  
    }
}
