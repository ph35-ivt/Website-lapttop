<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
        DB::table('customers')->insert([
            'name' => 'Bùi Đức Lê Duy',
           'email'=> 'buiduy057@gmail.com',  
            'phone' => '0386556593', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('customers')->insert([
            'name' => 'Lê Huỳnh',
            'email'=>'lehuynh057@gmail.com',  
            'phone' => '0386556592', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('customers')->insert([
            'name' => 'Hoàng Thảo',
            'email'=>'hoangthao2101@gmail.com',  
            'phone' => '0909778990', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('customers')->insert([
            'name' => 'Mai Thảo',
            'email'=>'maithao01@gmail.com',  
            'phone' => '0909778990', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
