<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('categories')->insert([
           'name'=> 'Dell', 
           'category_slug'=> 'dell',  
            'description' => 'Dell Inc là một công ty đa quốc gia của Hoa Kỳ về phát triển và thương mại hóa công nghệ máy tính có trụ sở tại Round Rock, Texas, Hoa Kỳ.',
            'order' =>'10',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Asus', 
            'category_slug'=> 'asus',  
            'description' => 'ASUSTeK Computer Incorporated là một tập đoàn đa quốc gia đặt trụ sở tại Đài Loan chuyên sản xuất các mặt hàng điện tử như bo mạch chủ, máy tính xách tay, máy chủ, điện thoại di động và các sản phẩm máy tính khác',
            'order' =>'20',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('categories')->insert([
           'name'=> 'Gamming', 
            'category_slug'=> 'gamming',  
            'description' => 'Dell Inc là một công ty đa quốc gia của Hoa Kỳ về phát triển và thương mại hóa công nghệ máy tính có trụ sở tại Round Rock, Texas, Hoa Kỳ.',
            'order' =>'10',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Macbook',  
            'category_slug'=> 'macbook', 
            'description' => 'MacBook thực chất là dòng sản phẩm máy tính xách tay của thương hiệu nổi tiếng Apple. Với thiết kế vô cùng đẹp mắt cùng hệ điều hành thân thiện, hiệu năng tốt đã giúp MacBook giành được thị phần của hệ điều hành MacOS. MacBook có hai dòng chính là: MacBook Air và MacBook Pro.',
            'order' =>'20',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('categories')->insert([
           'name'=> 'Acer',
            'category_slug'=> 'acer',   
            'description' => 'Tập đoàn Hoành Kì là tập đoàn đa quốc gia về thiết bị điện tử và phần cứng máy tính của Đài Loan có trụ sở tại Tịch Chỉ, Tân Bắc, Đài Loan.',
            'order' =>'10',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'HP', 
            'category_slug'=> 'hp',  
            'description' => 'Máy tính HP là thương hiệu của Mỹ, viết tắt của Hewlett-Packard HP, thành lập ngày 1/1/1939 tại Palo Alto, California, Hoa Kỳ. HP hiện có trụ sở tại Cupertino, California, Hoa Kỳ.',
            'order' =>'20',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Lenovo', 
            'category_slug'=> 'lenovo',  
            'description' => 'Lenovo Group Ltd. là tập đoàn đa quốc gia về công nghệ máy tính có trụ sở chính ở Bắc Kinh, Trung Quốc và Morrisville, Bắc Carolina, Mỹ.',
            'order' =>'20',
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
