<?php

use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('order__details')->insert([
           'order_id'=> rand(1, 4),
            'product_id'=>rand(1, 58),
            'price'=>5000000,
            'quantity'=>4,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('order__details')->insert([
           'order_id'=> rand(1, 4),
            'product_id'=>rand(1, 58),
            'price'=>1000000,
            'quantity'=>6,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('order__details')->insert([
           'order_id'=> rand(1, 4),
            'product_id'=>rand(1, 58),
            'price'=>2000000,
            'quantity'=>2,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('order__details')->insert([
           'order_id'=> rand(1, 4),
            'product_id'=>rand(1, 58),
            'price'=>1000000,
            'quantity'=>5,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
