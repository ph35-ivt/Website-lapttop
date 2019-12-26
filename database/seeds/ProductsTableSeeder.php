<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Latitude E5470',
           'slug'=>'dell-latitude-e5470',
            'content'=>'CPU	Intel® Core™ i5 - 6300U (4M Cache), 2.4 GHz
			RAM	8 GB DDR4 2133 MHz
			Card Đồ Họa	Intel HD Graphics 520
			Màn Hình	14" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 500GB
			Bàn phím	Backlit keyboard LED
			Pin	62WHr
			Kích Thước	334.9 mm x 23.2 mm x 231.1 mm
			Trọng Lượng	1.67 kg',
			'price'=>'7700000',
			'quantity'=>'20',
			'link'=>'user/images/product/img1.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Latitude E7240',
           'slug'=>'dell-latitude-e7240',
            'content'=>'CPU	Intel Core i7- 4600U Processor 2.1Ghz (Turbo Boot 3.30 GHz)
			RAM	4GB DDR4 2133MHz, 2 slots
			Card Đồ Họa	Intel HD Graphics 620
			Màn Hình	12.5 inch HD (1368×768)
			Ổ Cứng	SSD 256GB
			Bàn phím	Backlit keyboard LED
			Pin	4-cell Lithium ion
			Trọng Lượng	1.3 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img2.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell XPS 13 9360',
           'slug'=>'dell-xps-13-9360',
            'content'=>'CPU	 Intel Skylake Core i7-7560U, ~ 2.4 GHz
			RAM	 16GB LPDDR3 1867Mhz
			Card Đồ Họa	Đồ họa tích hợp Intel Iris Plus HD 540
			Màn Hình	13,3 inch, độ phân giải 3200 x 1800 px, màn hình cảm ứng Infinity Edge, IGZO
			Ổ Cứng	  512GB M.2 PCIe NVMe
			Bàn phím	 Có đèn nền LED
			Pin	56 Wh
			Kích Thước	  304mm x 200mm x 17mm.
			Trọng Lượng	1,3kg',
			'price'=>'7700000',
			'quantity'=>'20',
			'link'=>'user/images/product/img3.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Vostro V5568',
           'slug'=>'dell-vostro-v5568',
            'content'=>'CPU	 Intel® Core™ i5 - 7200U Processor (3M Cache, up to 3.10 GHz)
			Memory	 4 GB (DDR4 bus 2400MHz)
			HDD	 HDD 1TB / SSD 128GB
			VGA	NVIDIA® GeForce® GT 940MX 2GB  GDDR5 + Intel® HD Graphics 620
			Display	15.6 inch HD (1368 x 768 pixels) Anti Glare
			Driver	DVD±R/RW supperMulti
			Other	19.2 mm x 380 mm x 252.5 mm',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img4.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell XPS 15 9550',
           'slug'=>'dell-xps-9550',
            'content'=>'CPU	Intel Core i7 - 6700HQ ( 2.9 GHz - 3.5 GHz / 6MB / 4 nhân, 8 luô`ng )
			RAM	DDR4 8GB (2 x 4GB) 2666MHz, 2 slots, up to 32GB
			Card Đồ Họa	GeForce GTX 960M 2GB GDDR5 + Intel HD Graphics 530
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	SSD M.2 256GB
			Kết Nối	1x USB 3.0; 1x USB 3.1 Type C; 1x HDMI
			Bàn phím	 Backlit keyboard LED
			Pin	  3 Cell ,
			Kích Thước	14,06 x 9,27 x 0,45
			Trọng Lượng	 2 kg',
			'price'=>'7700000',
			'quantity'=>'20',
			'link'=>'user/images/product/img5.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Inspiron 5577',
           'slug'=>'dell-inspriron-5577',
            'content'=>'CPU	Intel Core i7 - 7700H ( 2.8 GHz - 3.8 GHz / 6MB / 4 nhân, 8 luồng )
			RAM	DDR4 8GB (2 x 4GB) 2666MHz, 2 slots, up to 32GB
			Card đồ họa	NVIDIA® GeForce® GTX 1050 4GB GDDR5 + HD Graphics 630
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	HDD 1TB + SSD 128GB ( BH 03 năm)
			 Kết Nối	2 x USB 3.0
			HDMI
			Headphone/microphone combo jack
			USB 3.0 with PowerShare
			LAN
			Bàn phím	 Backlit keyboard LED
			Pin	6 Cells
			Kích Thước	25.3 x 383 x 265 mm
			Trọng Lượng	 2.55 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img6.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Inspiron 3580 ',
           'slug'=>'dell-inspriron-3580',
            'content'=>'CPU	Intel Core i5 Coffee Lake, 8265U ~ 1.60 GHz
			RAM	DDR4 4GB (1x 4GB) 2666MHz, 2 slots, up to 32GB
			VGA	Card đồ họa rời, AMD Radeon 520 2GB
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB/ SSD 128GB ( Bảo hành 03 năm), Hỗ trợ khe cắm SSD M.2 PCIe
			 Kết Nối	HDMI 1.4, 2 x USB 3.1, USB 2.0
			Bàn phím	 Backlit keyboard
			Pin	  Lion 3 cell
			Kích Thước	Dài 380 mm - Rộng 258 mm - Dày 27 mm
			Trọng Lượng	2.3 kg',
			'price'=>'7700000',
			'quantity'=>'20',
			'link'=>'user/images/product/img7.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Latitude E6540 Core i7',
           'slug'=>'dell-latitude-e6540-core-i7',
            'content'=>'CPU	 Intel® Core™ i7 - 4610QM, 2.8GHz
			Memory	  8GB DDR3L Bus 1600MHz ( 2 khe RAM)
			Hard Disk	  HDD 320GB/ SSD 128GB ( BH 03 năm)
			VGA	 Intel HD Graphics 4000
			Display	  15.6 inch HD 1378*786 pixel, AntiGlare Led Backlit
			Height	 2.4 kg
			 Other	
			USB 3.0, USB 2.0, VGA, LAN (RJ – 45), HDMI, Chuẩn WiFi (802.11b/g/n)
			 Size	  379 x 250.5 x 33.4mm',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img8.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Precision M6800 Core i7',
           'slug'=>'dell-precision-m6800-core-i7',
            'content'=>'CPU	 Intel Core i7 - 4810MQ, 2.8 GHz up to 3.8GHz
			Memory	  8GB DDR3L 1600MHz  ( Tối đa 32GB)
			Hard Disk	 SSD 256GB (Hỗ trợ khe cắm SSD M.2 PCIe)
			VGA	  VGA rời NVIDIA Quadro K4100M + VGA Onboard 4600
			Display	17.3 inch, Full HD (1920 x 1080), IPS
			Height	 3.8kg
			 BH 	  12 Tháng',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img9.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 1,
           'name'=>'Dell Inspiron N3543 Core i5',
           'slug'=>'dell-inspriron-n3543-core-i5',
            'content'=>'CCPU	 Intel® Core™ i5 - 5200U, 2.20 GHz
			Memory	4 GB, DDR3L bus 1600 MHz
			Hard Disk	  HDD 500GB/ SSD 128GB ( BH 03 năm )
			VGA	 Intel HD Graphics 5500 + Card đồ họa rời, NVIDIA® GeForce® 820M
			Display	15.6 inch, HD (1366 x 768)
			Height	 2.4kg
			 Other	2 x USB 2.0, HDMI, LAN (RJ45), USB 3.0
			 Size	 25.6mm x 2.37mm',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img10.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         //Asus
           DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus Vivobook S330FA ',
           'slug'=>'asus-vivobook-s330fa',
            'content'=>'CPU	Intel Core i5 - 6200U (3M Cache, up to 2.8 GHz)
			RAM	4GB DDR3L 1600MHz
			Card Đồ Họa	Intel HD Graphics 520 + nVIDIA 940MX
			Màn Hình	15.6 HD (1368×768)
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm )
			Kết Nối	2 x USB 2.0 ; 2 x USB 3.0; 1 x HDMI
			Pin	60WHr
			Kích Thước	  382 x 255 x 21.7 mm
			Trọng Lượng	 2.0 kg',
			'price'=>'1000000',
			'quantity'=>'20',
			'link'=>'user/images/product/img11.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus K501UQ Core i5',
           'slug'=>'asus-k501uq-core-i5',
            'content'=>'CPU	Intel Core i5 - 6200U (3M Cache, up to 2.8 GHz)
			RAM	4GB DDR3L 1600MHz
			Card Đồ Họa	Intel HD Graphics 520 + nVIDIA 940MX
			Màn Hình	15.6 HD (1368×768)
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm )
			Kết Nối	2 x USB 2.0 ; 2 x USB 3.0; 1 x HDMI
			Pin	60WHr
			Kích Thước	  382 x 255 x 21.7 mm
			Trọng Lượng	 2.0 kg',
			'price'=>'7900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img12.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus P550LD Core i7',
           'slug'=>'asus-p550ld-core-i7',
            'content'=>'CPU	Intel® Core™ i7 - 4510U Processor (3M Cache, up to 3.0 GHz)
			RAM	4GB DDR3L bus 1600Mhz
			Card Đồ Họa	Card rời nVIDIA® GeForce® 820M + Intel HD Graphic
			Màn Hình	15.6 inch HD (1368×768)
			Ổ Cứng	 HDD 500GB / SSD 128GB ( BH 03 năm)
			Giao Tiếp	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)
			Pin	Li-Ion 4 cell
			Kích Thước	Dài 380 mm - Ngang 251 mm - Dày 24.8/31.7 mm
			Trọng Lượng	 2.2  kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img13.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus F555LF Core i7',
           'slug'=>'asus-f555lf-core-i7',
            'content'=>'CPU	Intel Core i7 - 5500U (3M Cache, up to 3.0 GHz)
			RAM	 8GB DDR3L bus 1600MHz
			Card Đồ Họa	 Card rời nVIDIA Geforce GT 930M
			Màn Hình	 15.6 inch HD LED (1366 x 768 pixels)
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm)
			Kết Nối	USB 3.0, USB 2.0, HDMI, VGA
			Pin	 Pin Liền
			Kích Thước	328mm x 256mm x 25.8mm
			Trọng Lượng	 2.4 Kg',
			'price'=>'550000',
			'quantity'=>'20',
			'link'=>'user/images/product/img14.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus K550JK Core i5',
           'slug'=>'asus-k550jk-core-i5',
            'content'=>'CPU	Core™ i5  - 4200H ( 2.8GHz upto 3.4GHz, 4Thread, 3M cache )
			RAM	6GB DDR3L bus 1600 MHz
			Card Đồ Họa	NVIDIA GeForce GTX 850M 2GB /Intel HD Graphics 4600
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm)
			Bàn phím	 Backlit keyboard
			Pin	  4 Cell
			Trọng Lượng	 2.3 kg',
			'price'=>'16000000',
			'quantity'=>'20',
			'link'=>'user/images/product/img15.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus Gaming GL552VW Core i5 ',
           'slug'=>'asus-gaming-gl552vw-core-i5',
            'content'=>'CPU	Intel Core i5 - 6300H (4 x 2.3GHz up to 3.2GHz Cache 6Mb)
			RAM	8GB DDR4 2133MHz
			VGA	Intel HD Graphics 530 + nVIDIA GeForce GTX 960M
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB/  SSD 128GB (BH 03 năm)
			 Kết Nối	 USB 2.0 USB 3.0, USB 3.1 (Type C) HDMI, LAN, jack 3.5mm
			Bàn phím	 Backlit keyboard LED ( Đỏ)
			Pin	  4 cell 45 Wh
			Kích Thước	  38 x 26.5 x 2.58 cm390 (W) x 266 (D) x 26.75 (H) mm
			Trọng Lượng	 2.5 kg',
			'price'=>'22000000',
			'quantity'=>'20',
			'link'=>'user/images/product/img16.png', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
        DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus Vivobook S15 S510UQR Core i5 ',
           'slug'=>'asus-vivobook-s15-s510uqr-core-i5',
            'content'=>'CPU	Intel Core i5 Kabylake Refresh, 8250U
			Memory	8 GB, DDR4 (2 khe), 2400 MHz.
			HDD	  HDD 1 TB 
			VGA	NVIDIA® GeForce® GT 940MX / Integrated Intel® UHD Graphics 620
			Display	15.6 inch Full HD (1920 x 1080 pixels) Anti Glare
			 Weight	 1.5 kg
			Other	Webcam, Lan, moderm, 4.1 Card Reader, USB 3.0, Backlight Keyboard
			 Color	 Vàng (Gold)',
			'price'=>'12200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img17.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus Gaming F570ZD-E4297T AMD R5',
           'slug'=>'asus-gaming-f560zd-e4297t-amd-r5',
            'content'=>'CPU	AMD Ryzen 5-2500U 2.0GHz up to 3.6GHz 4MB
			RAM	8GB DDR4 2400MHz (2x SO-DIMM socket, up to 16GB SDRAM)
			Ổ cứng	HDD 1TB 5400rpm / SSD 128GB 
			Card đồ họa	NVIDIA GeForce GTX 1050 4GB GDDR5 + Radeon™ Vega 8 Graphics
			Màn hình	15.6" FHD (1920 x 1080) IPS, Anti-Glare with 72% NTSC, 300nits
			Cổng giao tiếp	2x USB 2.0, 1x USB 3.0, 1x USB 3.1 Type C, HDMI, RJ-45, Finger Print
			Ổ quang	None
			Audio	Sonic Master 
			Đọc thẻ nhớ	Multi-format card reader (SD/SDXC)
			Chuẩn LAN	10/100/1000/Gigabits Base T
			Kích thước	37.4 x 25.6 x 2.19 cm
			Trọng lượng 	 1.96 kg',
			'price'=>'12900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img18.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'Asus P550LD Core i5',
           'slug'=>'asus-p550ld-core-i5',
            'content'=>'CPU	Intel® Core™ i5 - 4310U Processor (3M Cache, up to 2.9 GHz)
			RAM	4GB DDR3L bus 1600Mhz
			Card Đồ Họa	Card rời nVIDIA® GeForce® 820M + Intel HD Graphic
			Màn Hình	15.6 inch HD (1368×768)
			Ổ Cứng	 HDD 500GB / SSD 128GB ( BH 03 năm)
			Giao Tiếp	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)
			Pin	Li-Ion 4 cell
			Kích Thước	Dài 380 mm - Ngang 251 mm - Dày 24.8/31.7 mm
			Trọng Lượng	 2.2  kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img19.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 2,
           'name'=>'ASUS GL552VX Core i5 -6300HQ',
           'slug'=>'asus-gaming-gl552vw-core-i5-6300hq',
            'content'=>'CPU 	Intel Core i5 - 6300HQ . 2.30 GHz ~ 3.20 GHz
			RAM	4 GB DDR4 2400 MHz, 4 slot up to 32 GB
			Hard Disk	 SSD 128GB/ HDD 1TB
			VGA	Intel HD Graphics 520 + NVIDIA GeForce
			15.6 inch, LED Full HD Anti-Glare
			(1920 x 1080 Pixels)
			Kích thước	385 x 255 x 32.4 mmDày 21.4 mm, 1.77 kG
			 Thiết kế	 Vỏ nhựa, PIN rời
			Battery	Up to 3 hours of battery life
			Options	 Wi-Fi, USB 2.0, USB 3.0, HDMI, Bluetooth 4.0, LAN
			Warranty	Bảo hành 12 tháng',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img20.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          // gamming
          DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'MSI GL63 9SD core i7',
           'slug'=>'msi-gl63-9sd-core-i7',
            'content'=>'
			CPU	Intel Core i7-9750H (2.60Ghz upto 4.50Ghz, 6 nhân 12 luồng, 12MB)
			RAM	8 GB DDR4 2666 MHz ( Dual DIMM)
			Card Đồ Họa	nVidia Geforce GTX 1660Ti 6GB GDDR6 + UHD Graphics 630
			Màn Hình	15.6" FHD (1920×1080), 120Hz 94% NTSC color Anti-glare
			Ổ Cứng	SSD M.2 512GB
			Kết Nối	3x USB-A 3.1, 1x USB-C gen 2, HDMI 2.0, miniDP, LAN, đầu đọc thẻ SD, tai nghe và mic, Khóa Kensington
			Pin	 6 cell
			Kích Thước	383 x 260 x 27~29 mm
			Trọng Lượng	 2.3 kg',
			'price'=>'29200000',
			'quantity'=>'30',
			'link'=>'user/images/product/img21.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Dell Gaming G3 3579 Core i5',
           'slug'=>'dell-gaming-g3-3579-core-i5',
            'content'=>'
			CPU	Intel Core i5 - 8300H ( 2.8 GHz - 3.8 GHz / 6MB / 4 nhân, 8 luồng )
			RAM	DDR4 8GB (1 x 8GB) 2666MHz; 2 slots, up to 32GB
			VGA	Intel HD Graphics 630 + nVIDIA GeForce GTX 1050 4GB
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB/ SSD NVMe 128GB
			Kết Nối	1x 2-in-1 SD/MicroMedia card 2x SuperSpeed USB 3.1 Gen 1 Type-A 1x Power/DC-in Jack 1x HDMI 2.0 1x Gigabit Ethernet RJ-45 1x Headphone/Mic
			Bàn phím	 Backlit keyboard LED
			Pin	4 Cells, 56WHrs
			Kích Thước	389 x 274 x 24.95 mm
			Trọng Lượng	2.5 kg',
			'price'=>'19000000',
			'quantity'=>'30',
			'link'=>'user/images/product/img22.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
            DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Dell Inspiron 5577 Core i7',
           'slug'=>'dell-inspriron-5577-core-i7',
            'content'=>'
			CPU	Intel Core i7 - 7700H ( 2.8 GHz - 3.8 GHz / 6MB / 4 nhân, 8 luồng )
			RAM	DDR4 8GB (2 x 4GB) 2666MHz, 2 slots, up to 32GB
			Card đồ họa	NVIDIA® GeForce® GTX 1050 4GB GDDR5 + HD Graphics 630
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	HDD 1TB + SSD 128GB ( BH 03 năm)
			 Kết Nối	2 x USB 3.0
			HDMI
			Headphone/microphone combo jack
			USB 3.0 with PowerShare
			LAN
			Bàn phím	 Backlit keyboard LED
			Pin	6 Cells
			Kích Thước	25.3 x 383 x 265 mm
			Trọng Lượng	 2.55 kg',
			'price'=>'18500000',
			'quantity'=>'30',
			'link'=>'user/images/product/img23.png', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Dell Inspiron 5577 Core i5',
           'slug'=>'dell-inspriron-5577-core-i5',
            'content'=>'
			CPU	Intel Core i5 - 7300H ( 2.8 GHz - 3.8 GHz / 6MB / 4 nhân, 8 luồng )
			RAM	DDR4 8GB (2 x 4GB) 2666MHz, 2 slots, up to 32GB
			Card đồ họa	NVIDIA® GeForce® GTX 1050 4GB GDDR5 + HD Graphics 630
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	HDD 1TB/ SSD 128GB ( BH 03 năm)
			 Kết Nối	2 x USB 3.0
			HDMI
			Headphone/microphone combo jack
			USB 3.0 with PowerShare
			LAN
			Bàn phím	 Backlit keyboard LED
			Pin	6 Cells
			Kích Thước	25.3 x 383 x 265 mm
			Trọng Lượng	 2.55 kg',
			'price'=>'18500000',
			'quantity'=>'30',
			'link'=>'user/images/product/img23.png', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Dell Inspiron 7559 Core i5 ',
           'slug'=>'dell-inspriron-7559-core-i5',
            'content'=>'
			CPU	 Intel® Core™ i5 - 6300HQ Processor (6M Cache, up to 3.20 GHz)
			Memory	 8 GB (DDR3 bus 1600MHz)
			HDD	  SSD 128GB + HDD 1TB
			VGA	NVIDIA® GeForce® GTX 960M 4GB  GDDR5 with Optimus technology / Integrated Intel® HD Graphics 520
			Display	15.6 inch Full HD (1920 x 1080 pixels) Anti Glare
			Driver	DVD±R/RW supperMulti
			Other	Webcam, Lan, moderm, 4.1 Card Reader, USB 3.0, Backlight Keyboard',
			'price'=>'13900000',
			'quantity'=>'30',
			'link'=>'user/images/product/img23.png', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Asus K550JK Core i5 ',
           'slug'=>'asus-k550jk-core-i5',
            'content'=>'
			CPU	Core™ i5  - 4200H ( 2.8GHz upto 3.4GHz, 4Thread, 3M cache )
			RAM	6GB DDR3L bus 1600 MHz
			Card Đồ Họa	NVIDIA GeForce GTX 850M 2GB /Intel HD Graphics 4600
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm)
			Bàn phím	 Backlit keyboard
			Pin	  4 Cell
			Trọng Lượng	 2.3 kg',
			'price'=>'10900000',
			'quantity'=>'30',
			'link'=>'user/images/product/img27.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
            DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Dell Inspiron 7447 Core i5  ',
           'slug'=>'dell-inspriron-7447-core-i5',
            'content'=>'
			CPU	Intel Core i5 - 4710HQ, 2.50 GHz
			RAM	8 GB, DDR3L (2 khe RAM), 1600 MHz
			Card Đồ Họa	Card rời (Optimus), NVIDIA® GeForce® GTX 850M
			Màn Hình	14 inch, HD (1366 x 768)
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm)
			Kết Nối	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0
			Bàn phím	 Backlit keyboard LED
			Pin	  4 Cell , 48 Whr
			Kích Thước	25.9/28.9, 2.23
			Trọng Lượng	  2.23 kg',
			'price'=>'10200000',
			'quantity'=>'30',
			'link'=>'user/images/product/img27.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Asus Gaming GL552VW Core i5  ',
           'slug'=>'asus-gaming-gl552vw-core-i5',
            'content'=>'
			CPU	Intel Core i5 - 6300H (4 x 2.3GHz up to 3.2GHz Cache 6Mb)
			RAM	8GB DDR4 2133MHz
			VGA	Intel HD Graphics 530 + nVIDIA GeForce GTX 960M
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	 HDD 1TB/  SSD 128GB (BH 03 năm)
			 Kết Nối	 USB 2.0 USB 3.0, USB 3.1 (Type C) HDMI, LAN, jack 3.5mm
			Bàn phím	 Backlit keyboard LED ( Đỏ)
			Pin	  4 cell 45 Wh
			Kích Thước	  38 x 26.5 x 2.58 cm390 (W) x 266 (D) x 26.75 (H) mm
			Trọng Lượng	 2.5 kg',
			'price'=>'10200000',
			'quantity'=>'30',
			'link'=>'user/images/product/img29.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 3,
           'name'=>'Acer Predator Helios 300 Core i7 ',
           'slug'=>'acer-predator-helios-300-g3-Core-i7',
            'content'=>'
			CPU	Intel Core i7 - 7700H ( 2.8 GHz - 3.8 GHz / 6MB / 4 nhân, 8 luồng )
			RAM	DDR4 8GB (2 x 4GB) 2666MHz, 2 slots, up to 32GB
			Card đồ họa	GeForce GTX 1050Ti 4GB
			Màn Hình	15.6" FHD (1920×1080), IPS
			Ổ Cứng	SSD M.2 128GB + HDD 1TB
			 Kết Nối	2x USB 2.0; 1x USB 3.0; 1x USB 3.1 Type C; 1x HDMI
			Bàn phím	 Backlit keyboard LED
			Pin	  4 Cell , 48 Whr
			Kích Thước	  390 (W) x 266 (D) x 26.75 (H) mm
			Trọng Lượng	 2.7 kg',
			'price'=>'21500000',
			'quantity'=>'30',
			'link'=>'user/images/product/img30.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         // Macebook
         DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Pro 13 i5 ',
           'slug'=>'macbook-pro-13-i5',
            'content'=>'
			CPU	Intel Core i5 3MB L3 Cache ~2.3 GHz
			RAM	 4GB 1333MHZ DDR3
			Card Đồ Họa	Intel HD 3000
			Màn Hình	 13.3 inch (1280* 800 Pixel)
			Ổ Cứng	SSD 120GB
			Cổng Mạng	Wireless 802.11n WiFi & Bluetooth 4.0
			Kết Nối	Dual USB 3.0 Ports & Thunderbolt Port',
			'price'=>'9500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img31.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Air MQD32SA ',
           'slug'=>'macbook-air-mqd32sa',
            'content'=>'
			CPU	Intel, Core i5 ~1.8GHz up to 2.9Ghz
			RAM	8 GB, LPDDR3
			Card Đồ Họa	Intel HD Graphics 6000
			Màn Hình	13.3 inch, 1440 x 900 pixels
			Ổ Cứng	 SSD 128GB
			Kích Thước	Dài 325 mm - Ngang 227 mm - Dày 17 mm
			Trọng Lượng	1.35 Kg',
			'price'=>'19500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img32.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook 12 Core M',
           'slug'=>'macbook-12-core-m',
            'content'=>'
			CPU	Intel Core M Dual-Core  , 1.1GHz ~ 2.9GHz
			RAM	8GB LPDDR3
			Card Đồ Họa	 Đồ họa Intel HD 5300
			Màn Hình	12 inch,Retina ( 2304*1440 Pixel )
			Ổ Cứng	 SSD PCIe 256GB
			Kết Nối	1x USB 3.1 Type C
			Kích Thước	27,9 x 1,3 x 19,6 cm
			Trọng Lượng	 0.9 kg',
			'price'=>'16500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img32.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
            DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Air 13 2013 ',
           'slug'=>'macbook-air-13-2013',
            'content'=>'
			CPU	Intel Core i5 Dual-Core ~1.3GHz ( (I5-4250U))
			RAM	4GB 1600MHz LPDDR3
			Card Đồ Họa	Integrated Intel HD Graphics 5000
			Màn Hình	 13.3 inch LED-Backlit Glossy ( 1440*900 Pixel)
			Ổ Cứng	SSD  128GB
			 Kết Nối	 2 x USB 3.0 Ports, One Thunderbolt Port
			Bàn phím	 Backlit keyboard LED
			Pin	54 W h Li-Poly',
			'price'=>'11900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img33.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Pro 13 inch 2017 i5 ',
           'slug'=>'macbook-pro-13-inch-2017-i5',
            'content'=>'
			CPU	 Intel Core i5 Processor 2.3GHz Boost to 3.6GHZ, 4MB L3 Cache
			RAM	8GB 2133MHz LPDDR3
			VGA	Intel Iris Plus Graphics 640
			Màn Hình	13.3" Retina (2560 x 1600 pixels)
			Ổ Cứng	  SSD 256GB
			Kích Thước	  Dài 304 mm - Ngang 212 mm - Dày 15 mm
			Trọng Lượng	1.37kg
			Màu Sắc	 Xám / Bạc ( Gray/ Silver)',
			'price'=>'11900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img34.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Air 13 MQD42SA Core i5 ',
           'slug'=>'macbook-air-13-mqd42sa-core-i5',
            'content'=>'
			CPU: Core i5 ~ 1.40 GHz
			RAM: 8 GB, DDR3L(On board), 1600 MHz
			Màn hình: 13.3 inch, WXGA+(1440 x 900)
			Card màn hình:  Intel HD Graphics 5000
			Cổng kết nối: MagSafe 2, 2 x USB 3.0, Mini DisplayPort, Thunderbolt
			Thiết kế: Vỏ kim loại nguyên khối
			Trọng lượng: ~1.35kg
			Pin: Lithium- polymer
			Kích thước: Dài 325 mm – Ngang 227 mm – Dày 17 mm',
			'price'=>'12900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img35.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Air Mid 2013',
           'slug'=>'macbook-air-mid-2013',
            'content'=>'
			 CPU	 Intel Core i5 Dual-Core (Haswell) ~ 1.3GHz
			 RAM	 4GB 1600MHz LPDDR3
			Ổ Cứng	128GB SSD
			VGA	 Integrated Intel HD Graphics 5000
			 Màn hình	11.6″ LED-Backlit Glossy
			 Kết nối	Dual USB 3.0 Ports, One Thunderbolt Port',
			'price'=>'12900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img36.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Pro 13 Retina ME865 2013',
           'slug'=>'macbook-air-pro-13-retina-me865-2013',
            'content'=>'
		    CPU	 Intel® Core i7 Dual-Core (Hasswell) ~ 2.4GHz
			Memory	 8 GB (LPDDR3 bus 1600MHz)
			HDD	 SSD 128GB
			VGA	Integrated Intel Graphics 6000
			Display	13.3 inch, Retina (2560 x 1600 pixels)
            Other	Dual USB 3.0 Ports, Thunderbolt Port 2',
			'price'=>'12900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img37.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Macbook Pro 13 2016 Core i5',
           'slug'=>'macbook-air-pro-13-2016-core-i5',
            'content'=>'
		    CPU	 Intel Core i5 ~ 3.0 GHz
			Memory	  8GB LPDDR3 1866MHz
			Hard Disk	Apple SSD 256 GB
			VGA	Intel Iris Graphics 540
			Display	13,3 inch; 2560×1600 pixel 227 ppi
			Height	  1,37 kg',
			'price'=>'21000000',
			'quantity'=>'20',
			'link'=>'user/images/product/img38.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 4,
           'name'=>'Apple Macbook Air 2015 Core i5',
           'slug'=>'apple-macbook-air-2015-core-i5',
            'content'=>'
		    Bộ vi xử lý: Intel Core i5 (2×1.6GHz Turbo Boost 2.6GHz, Cache 3MB, Bus 2500)
			Bộ nhớ trong: 8GB DDR3 1600MHz
			Ổ đĩa cứng: SSD 128GB
			Cạc màn hình: Intel HD Graphics 6000
			Màn hình: 13.3 inch LED 1440×900
			Ổ đĩa quang: Không có
			Webcam: Facetime HD
			Kết nối: USB 3.0, Card-Reader, Thunderbolt
			Dung lượng pin: 5865mAh (sử dụng liên tục được 5-6 giờ)
			Kích cỡ: 325 x 227 x 3-17 mm
			Trọng lượng: 1.35 kg
			Mầu sắc: Nhôm sáng',
			'price'=>'21000000',
			'quantity'=>'20',
			'link'=>'user/images/product/img39.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         // acer
         DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer Aspire VX5 Core i7',
           'slug'=>'acer-aspire-vx5-core-i7',
            'content'=>'
		    CPU	 Intel® Core i7 - 7700HQ KabyLake. 2.8GHz ~ 3.8GHz
			Memory	  8GB DDR4 Bus 2400MHz ( 2 khe)
			Hard Disk	  HDD 1TB/ SSD 128GB ( BH 03 năm)
			VGA	 Intel HD Graphics 620 + Card rời NVIDIA GTX 1050Ti 4GB GDDR5
			Display	 15.6 inch Full HD (1920 x 1080)IPS,  Acer ColorBlast chống chói
			Height	  2.6 Kg
			 Other	1 x USB 2.0, 2 x USB 3.0, 1 x USB-C, LAN RJ45, HDMI
			 Size	389 x 265.5 x 28.9 mm',
			'price'=>'18500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img40.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer Spin core i5 ',
           'slug'=>'acer-spin-core-i5',
            'content'=>'
		    CPU	 Intel® Core i5 Coffee Lake, 8250U, 1.60 GHz
			Memory	  4GB DDR4 Bus 2400MHz
			Hard Disk	  HDD 1TB/ SSD 128GB ( BH 03 năm)
			VGA	 Intel HD Graphics 520
			Display	 Cảm Ứng 14 inch Full HD (1920 x 1080), Tấm nền IPS
			Height	 1.7 kg
			 Other	2 x USB 3.0, HDMI, USB 2.0
			 Size	Dài 335 mm - Rộng 230 mm - Dày 20.8 mm',
			'price'=>'10500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img41.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer Aspire Z1402 Core i3 ',
           'slug'=>'acer-aspire-z1402-core-i3',
            'content'=>'
		   CPU: Intel Core i3 Broadwell, 5005U, 2.00 GHz
			RAM: 4 GB, DDR3L (1 khe RAM), 1600 MHz
			Ổ cứng:  HDD 500 GB
			Màn hình: 14 inch, HD (1366 x 768)
			Card màn hình: Card đồ họa tích hợp, Intel® HD Graphics 5500
			Cổng kết nối: HDMI, LAN (RJ45), USB 2.0, USB 3.0
			Hệ điều hành: Windows 10
			Thiết kế: Vỏ nhựa, PIN liền
			Kích thước: Dày 25.3 mm, 2.1 kg',
			'price'=>'4500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img42.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer Aspire E5 575G Core i5',
           'slug'=>'acer-aspire-e5-575g-core-i5',
            'content'=>'
		   CPU:Intel Core i5 Kabylake, 7200U, 2.50 GHz
			RAM:4 GB, DDR4 (2 khe), 2133 MHz
			Ổ cứng:HDD: 500 GB/ SSD 128GB (BH 03 Năm)
			Màn hình:15.6 inch, Full HD (1920 x 1080)
			Card màn hình:Card đồ họa rời, NVIDIA GeForce 940MX, 2 GB
			Cổng kết nối:2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, USB Type-C, VGA (D-Sub)
			Hệ điều hành:Windows 10
			Thiết kế:Vỏ nhựa, PIN liền
			Kích thước:Dày 25 mm, 2.2 kg',
			'price'=>'7400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img43.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer Aspire E5 575G Core i5',
           'slug'=>'acer-aspire-e5-575g-core-i5',
            'content'=>'
		   CPU:Intel Core i5 Kabylake, 7200U, 2.50 GHz
			RAM:4 GB, DDR4 (2 khe), 2133 MHz
			Ổ cứng:HDD: 500 GB/ SSD 128GB (BH 03 Năm)
			Màn hình:15.6 inch, Full HD (1920 x 1080)
			Card màn hình:Card đồ họa rời, NVIDIA GeForce 940MX, 2 GB
			Cổng kết nối:2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, USB Type-C, VGA (D-Sub)
			Hệ điều hành:Windows 10
			Thiết kế:Vỏ nhựa, PIN liền
			Kích thước:Dày 25 mm, 2.2 kg',
			'price'=>'7400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img44.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'ACER ASPRISE E5',
           'slug'=>'acer-aspire-e5',
            'content'=>'
		    CPU:
			Intel Core i3 Skylake, 6006U, 2.00 GHz
			RAM:
			4 GB, DDR4 (2 khe), 2133 MHz
			Ổ cứng:
			HDD: 500 GB
			Màn hình:
			14 inch, HD (1366 x 768)
			Card màn hình:
			Card đồ họa tích hợp, Intel® HD Graphics 520
			Cổng kết nối:
			2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)
			Hệ điều hành:
			Windows 10 Home SL
			Thiết kế:
			Vỏ nhựa, PIN liền
			Trọng lượng: 2.1kg',
			'price'=>'7400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img45.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'ACER ASPIRE E5 575G Core i5',
           'slug'=>'acer-aspire-e5-575-core-i5',
            'content'=>'
			CPU:Intel Core i5 Kabylake, 7200U, 2.50 GHz
			RAM:4 GB, DDR4 (2 khe), 2133 MHz
			Ổ cứng:HDD: 500 GB
			Màn hình:15.6 inch,  HD
			Card màn hình: Card đồ họa tích hợp, Intel® HD Graphics 620
			Cổng kết nối:2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, USB Type-C, VGA (D-Sub)
			Hệ điều hành:Windows 10
			Thiết kế:Vỏ nhựa, PIN liền
			Kích thước:Dày 25 mm, 2.2 kg',
			'price'=>'7400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img46.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'ACER F5-571',
           'slug'=>'acer-f5-571',
            'content'=>'
			CPU : Intel, Core i3-5005U Tốc độ 2.0 ghz
			RAM : 4 GB, DDR3L
			Ổ cứng : HDD, 500 GB
			Màn hình : 15.6 inch , 1366 x 768 pixels
			Card màn hình : Intel HD Graphics, Tích hợp
			Cổng kết nối : LAN : 10/100/1000 MbpsWIFI : IEEE 802.11b/g
			Hệ điều hành : Free DOS
			Trọng lượng : 2.3kg
			Kích thước : 381 x 256 x 24.9~29.2 mm',
			'price'=>'16400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img47.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer VX5 591G',
           'slug'=>'acer-vx5-591g',
            'content'=>'
			CPU : Intel, Core i7-7700HQ 2.8 GHZ
			RAM : 8 GB, DDR4
			Ổ cứng : HDD + SSD, 1 TB + 128 GB
			Màn hình : 15.6 inch , 1920 x 1080 pixels
			Card màn hình : NVIDIA Geforce GTX 1050, Card rời
			Cổng kết nối : LAN : 10/100/1000 Mbps, WIFI : 802.11a
			Hệ điều hành : Free DOS
			Trọng lượng : 2.6 Kg
			Kích thước : 389 x 265.5 x 28.9 mm',
			'price'=>'19500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img48.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'ACER E1 470G Core i3',
           'slug'=>'acer-e1-470g-core-i3',
            'content'=>'
			CPU: ACER, i3-3127U.
			RAM: DDR3, 2 GB.
			Đĩa cứng: HDD, 500 GB.
			Màn hình rộng: 14 inch,
			Đồ họa: Nvidia GeForce 820M.
			Đĩa quang: DVD+/-RW SuperMulti with Double Layer.
			Webcam: VGA (0.3 MP).
			Cổng giao tiếp: 4 x USB 2.0, eSATA, IEEE 1394 (Firewire).
			Kết nối khác: Bluetooth v3.0.
			PIN/Battery: Li-Ion 6 cell.
			Hệ điều hành: Windows 7 Professional 64 bit.',
			'price'=>'4500000',
			'quantity'=>'20',
			'link'=>'user/images/product/img49.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 5,
           'name'=>'Acer ES1 512',
           'slug'=>'acer-es1-512',
            'content'=>'
			CPU :Intel Pentium® Processor N3540
			RAM :4 GB DDR3
			Ổ cứng :HDD 500 GB
			Màn hình :15.6 inch 1366 x 768 pixels
			Card màn hình :Intel HD Graphics Tích hợp
			Cổng kết nối :LAN : 10/100Mbps WIFI : IEEE 802.11b/g/n
			Hệ điều hành :Free DOS
			Trọng lượng :2.1 Kg',
			'price'=>'3400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img50.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           //hp
          DB::table('products')->insert([
           'category_id'=> 6,
           'name'=>'HP Pavilion 15',
           'slug'=>'hp-pavilion-15',
            'content'=>'
			CPU	Intel Core i5 Kabylake, 8250U, (8CPUs)
			RAM	4 GB, DDR4 (2 khe), 2400 MHz
			Card Đồ Họa	Card đồ họa tích hợp, Intel® HD Graphics 620
			Màn Hình	15.6" Full HD (1920×1080)
			Ổ Cứng	 HDD 1TB/ SSD 128GB ( BH 03 năm)
			Kết Nối	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0
			Kích Thước	304.8mm x 200mm x 9 - 15.2mm.
			Trọng Lượng	1.86 kg',
			'price'=>'9900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img51.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 6,
           'name'=>'HP Elitebook Folio 9470M Core i5',
           'slug'=>'hp-elitebook-folio-9470m-core-15',
            'content'=>'
			CPU	Intel Core i5 Kabylake, 8250U, (8CPUs)
			RAM	4 GB, DDR4 (2 khe), 2400 MHz
			Card Đồ Họa	Card đồ họa tích hợp, Intel® HD Graphics 620
			Màn Hình	15.6" Full HD (1920×1080)
			Ổ Cứng	 HDD 1TB/ SSD 128GB ( BH 03 năm)
			Kết Nối	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0
			Kích Thước	304.8mm x 200mm x 9 - 15.2mm.
			Trọng Lượng	1.86 kg',
			'price'=>'5900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img52.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 6,
           'name'=>'HP Pavilion 15',
           'slug'=>'hp-pavilion-15',
            'content'=>'
			CPU	Intel® Core™ i5 - 8265U (6MB, 4 x 1.6GHz max 3.90GHz)
			R AM	4GB DDR4 2400MHz, 2 slots max 16GB
			Card Đồ Họa	Intel UHD Graphics 620 + nVIDIA GeForce MX130
			Màn Hình	15.6 inch FHD (1920×1080)
			Ổ Cứng	 HDD 1TB / SSD 128GB ( BH 03 năm)
			Kết Nối	1 x SSD (M2 2280); 2 x USB 3.1 Gen 1 ; 1 x USB 3.1 Type-C Gen 1 ; 1 x HDMI; 1 x RJ45; 1 x headphone/microphone combo
			Pin	 Lithium - Ion 3 Cell
			Kích Thước	36.16 x 24.16 x 1.79 cm
			Trọng Lượng	1.8 kg',
			'price'=>'5900000',
			'quantity'=>'20',
			'link'=>'user/images/product/img53.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           DB::table('products')->insert([
           'category_id'=> 6,
           'name'=>'HP Pavilion X360 11',
           'slug'=>'hp-pavilion-x360-11',
            'content'=>'
			CPU 	  Intel Core i3 Kabylake, 7100U, 2.40 GHz
			RAM	  4 GB DDR4 2400 MHz, 4 slot up to 32 GB
			Hard Disk	   HDD 500GB
			VGA	   Intel® HD Graphics 620
			Màn hình	  11.6 inch, HD (1366 x 768)
			Kích thước	  Dày 21.4 mm, 1.77 kG
			 Thiết kế	  Vỏ nhựa, PIN liền
			Battery	  Up to 4 hours of battery life
			Options	  2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0
			Warranty	  Bảo hành 12 tháng',
			'price'=>'7400000',
			'quantity'=>'20',
			'link'=>'user/images/product/img54.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
           // lenovo
        DB::table('products')->insert([
           'category_id'=> 7,
           'name'=>'Lenovo Thinkpad T440s i5',
           'slug'=>'lenovo-thinkpad-t440s-i5',
            'content'=>'
			CPU	Intel® Core™ i5 - 4300U
			RAM	DDR3L 4GB bus 1600MHz
			VGA	Intel HD Graphics 5500
			Màn Hình	14.1″ LED-Backlit HD+ Anti-Glare Matte Display 
			Ổ Cứng	 SSD 128GB
			 Kết Nối	1 x RJ45, 1 x Mini DisplayPort™, 1 x HDMI™, 1 x khe đọc thẻ 4-trong-1, 1 x jack cắm tai nghe, 1 x khe SC, 3 x USB 3.0
			Bàn phím	 Backlit keyboard LED
			Pin	4 Cells
			Kích Thước	  331 x 226.8 x 16.9 - 18.8 (mm)
			Trọng Lượng	1.3 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img55.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 7,
           'name'=>'Lenovo Thinkpad T440s i5',
           'slug'=>'lenovo-thinkpad-t440s-i5',
            'content'=>'
			CPU	Intel® Core™ i5 - 4300U
			RAM	DDR3L 4GB bus 1600MHz
			VGA	Intel HD Graphics 5500
			Màn Hình	14.1″ LED-Backlit HD+ Anti-Glare Matte Display 
			Ổ Cứng	 SSD 128GB
			 Kết Nối	1 x RJ45, 1 x Mini DisplayPort™, 1 x HDMI™, 1 x khe đọc thẻ 4-trong-1, 1 x jack cắm tai nghe, 1 x khe SC, 3 x USB 3.0
			Bàn phím	 Backlit keyboard LED
			Pin	4 Cells
			Kích Thước	  331 x 226.8 x 16.9 - 18.8 (mm)
			Trọng Lượng	1.3 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img56.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('products')->insert([
           'category_id'=> 7,
           'name'=>'Lenovo ThinkPad E460 i5',
           'slug'=>'lenovo-thinkpad-e460-i5',
            'content'=>'
			CPU	Intel® Core™ i5 - 4300U
			RAM	DDR3L 4GB bus 1600MHz
			VGA	Intel HD Graphics 5500
			Màn Hình	14.1″ LED-Backlit HD+ Anti-Glare Matte Display 
			Ổ Cứng	 SSD 128GB
			 Kết Nối	1 x RJ45, 1 x Mini DisplayPort™, 1 x HDMI™, 1 x khe đọc thẻ 4-trong-1, 1 x jack cắm tai nghe, 1 x khe SC, 3 x USB 3.0
			Bàn phím	 Backlit keyboard LED
			Pin	4 Cells
			Kích Thước	  331 x 226.8 x 16.9 - 18.8 (mm)
			Trọng Lượng	1.3 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img57.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('products')->insert([
           'category_id'=> 7,
           'name'=>'Lenovo Yoga 500 14IBD',
           'slug'=>'lenovo-yoga-500-14ibd',
            'content'=>'
			CPU	Intel® Core™ i5 - 4300U
			RAM	DDR3L 4GB bus 1600MHz
			VGA	Intel HD Graphics 5500
			Màn Hình	14.1″ LED-Backlit HD+ Anti-Glare Matte Display 
			Ổ Cứng	 SSD 128GB
			 Kết Nối	1 x RJ45, 1 x Mini DisplayPort™, 1 x HDMI™, 1 x khe đọc thẻ 4-trong-1, 1 x jack cắm tai nghe, 1 x khe SC, 3 x USB 3.0
			Bàn phím	 Backlit keyboard LED
			Pin	4 Cells
			Kích Thước	  331 x 226.8 x 16.9 - 18.8 (mm)
			Trọng Lượng	1.3 kg',
			'price'=>'7200000',
			'quantity'=>'20',
			'link'=>'user/images/product/img58.jpg', 
            'status'=>rand(0, 1),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
