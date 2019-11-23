<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
        // for ($i = 1; $i <= 1; $i++) { 
        // 	DB::table('news')->insert([
	       //      'title' => $faker->realText(100),
	       //      'content' => $faker->realText(100),
	       //      'link'=>'https://via.placeholder.com/500x300',
	       //      'new_nb' => rand(0, 1),
	       //      'created_at' => date("Y-m-d"),
	       //  ]);
        // }
        DB::table('news')->insert([
            'title' => 'Thay Phím Laptop Giá Rẻ – Lấy Ngay Tại Đà Nẵng',
            'content' => 'Laptop T&T – 484 Núi Thành, Đà Nẵng chuyên thay phím laptop giá rẻ, chính hãng với kinh nghiệm hơn 8 năm cung cấp dịch vụ sửa chữa, vệ sinh, cài đặt windows, phần mềm trên laptop. Đảm bảo mang dịch vụ tốt nhất đến khách hàng với thái độ làm việc chuyên nghiệp, uy tín và tận tâm.', 
            'link'=>'https://via.placeholder.com/500x300',          
             'new_nb' => rand(0, 1),
            'created_at' => date("Y-m-d"),
        ]);

        DB::table('news')->insert([
           'title' => 'Sửa Chữa Laptop tại Đà Nẵng',
           'content' => 'Tại Đà Nẵng, những trung tâm sửa chữa laptop Đà Nẵng xuất hiện khắp nơi. Người dùng khá khó khăn để tìm được một địa chỉ uy tín.',           
            'link'=>'https://via.placeholder.com/500x300',     
            'new_nb' => rand(0, 1),
            'created_at' => date("Y-m-d"),
        ]);

        DB::table('news')->insert([
            'title' => 'Vệ sinh, cài Win laptop hoàn toàn KHÔNG TỐN TIỀN',
            'content' => 'Vệ Sinh, cài Windows, Phần Mềm  tất cả đều KHÔNG MẤT BẤT KÌ CHI PHÍ NÀO – Laptop T&T.Đến với Laptop T&T các bạn sẽ được trải nghiệm dịch vụ Vệ sinh – Cài Win hoàn toàn không mất bất kì phí nào .Để một chiếc laptop luôn hoạt động ổn định, bạn không chỉ cần nâng niu giữ gìn, không gây va đập mạnh và không để laptop tiếp xúc với chất lỏng, mà bạn còn phải lưu ý đến vấn đề vệ sinh laptop định kỳ 6 tháng/lần. Cài đặt lại Windows để laptop có thể hoạt động trơn tru, mượt mà hơn.', 
            'link'=>'https://via.placeholder.com/500x300',          
             'new_nb' => rand(0, 1),
            'created_at' => date("Y-m-d"),
        ]);

        DB::table('news')->insert([
            'title' => 'Dell N7559A i7-6700HQ RAM 8GB HDD 1T VGA 4GB NVIDIA GeForce GTX 960M',
            'content' => 'Bạn đang cần một chiếc laptop chơi game với tầm giá 17 triệu đồng ?
              DELL 7559 – NGON, BỔ, RẺ TRONG TẦM GIÁ 
				 Màn hình 15.6′ Full HD, tấm nền IPS mang lại sự trải nghiệm chất lượng hình ảnh sắc nét.
				Thiết kế nhựa cao cấp phủ nhung. Di chuyển dễ dàng với trọng lượng 2,5kg
				 Bàn phím với đèn LED trắng đáp ứng sử dụng trong điều kiện thiếu sáng

		Dell N7559A là chiếc laptop Gaming của Dell có thiết mạnh mẽ, cá tính cùng cấu hình vô cùng mạnh mẽ với bộ vi xử lý Core i7 thế hệ Skylake mới nhất của Intel kết hợp cùng bộ nhớ RAM 8GB và card đồ họa rời 4GB, hứa hẹn sẽ mang đến cho người dùng những trải nghiệm khác biệt và mượt mà nhất.', 
		    'link'=>'https://via.placeholder.com/500x300',            
             'new_nb' => rand(0, 1),
            'created_at' => date("Y-m-d"),
        ]);

      
    }
}
