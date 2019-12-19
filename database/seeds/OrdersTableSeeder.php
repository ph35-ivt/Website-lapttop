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
           'name'=> 'Duy',
            'email'=>'buiduy057@gmail.com',
            'phone'=>'0135563338',
            'address'=>'11 lê văn sỹ',
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('orders')->insert([
            'name'=> 'Hoa',
            'email'=>'buiduy057@gmail.com',
            'phone'=>'0135563338',
            'address'=>'03 Hải phòng',
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('orders')->insert([
            'name'=> 'Văn',
            'email'=>'buiduy057@gmail.com',
            'phone'=>'0135563338',
            'address'=>'43 Lê Duẩn',
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('orders')->insert([
            'name'=> 'Thao',
            'email'=>'buiduy057@gmail.com',
            'phone'=>'0135563338',
            'address'=>'02 Hồ Tùng Mậu',
            'payment'=>rand(0, 1),
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
  
    }
}
