<?php

use Illuminate\Database\Seeder;

class RepairTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('repairs')->insert([
            'title' => 'Thay Ổ Cứng Laptop HDD – SSD Giá Rẻ Tại Đà Nẵng',
            'content' => 'Máy tính khởi động lâu, ổ cứng bị delay, bad sector, ổ cứng phát ra tiếng kêu cạch cạch…đấy là một dấu hiệu cho thấy ổ cứng của đang cần […]',    
             'link'=>'https://via.placeholder.com/500x300',            
            'new_nb' => rand(0, 1),
            'created_at' => date("Y-m-d"),
        ]);

      
    }
}
