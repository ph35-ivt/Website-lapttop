<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('sliders')->insert([
            'name' => 'banner 1',
            'link'=>'https://via.placeholder.com/500x300',  
            'content' => 'Laptop T&T – Đà Nẵng', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('sliders')->insert([
            'name' => 'banner 2',
            'link'=>'https://via.placeholder.com/500x300',  
            'content' => 'Laptop T&T – Đà Nẵng', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('sliders')->insert([
            'name' => 'banner 3',
            'link'=>'https://via.placeholder.com/500x300',  
            'content' => 'Laptop T&T – Đà Nẵng', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('sliders')->insert([
            'name' => 'banner 4',
            'link'=>'https://via.placeholder.com/500x300',  
            'content' => 'Laptop T&T – Đà Nẵng', 
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);


    }
}
