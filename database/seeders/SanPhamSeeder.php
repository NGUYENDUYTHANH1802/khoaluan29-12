<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('san_pham')->insert([
            'ten' => "Tivi Samsung 4K 43 inch ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "tivi_SS_4K_43_inch.jpg",
            'mota' => "Kích thước tivi 43 inch, thiết kế không viền 3 cạnh mang đến nghiệm xem tuyệt vời.",
            'gia' => 9400000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>3,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tivi Samsung 43 inch ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "tivi_SS_43_inch.jpg",
            'mota' => "Thiết kế nhỏ gọn đi cùng với màn hình 43 inch.",
            'gia' => 7450000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>3,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tivi LG 4K 43 inch ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "tivi_LG_4k_43_inch.jpg",
            'mota' => "Thiết kế tivi LG 43 inch nhỏ gọn phù hợp với phòng ngủ, phòng khách.",
            'gia' => 9000000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>3,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tivi Sony 4K 43 inch ",
            'trangthai' => "Đang Bán",
            'hinhanh' => "tivi_SN_4k_32_inch.jpg",
            'mota' => "Thiết kế tinh tế, chân đế hình chữ V vững chắc, kích thước tivi 43 inch, độ phân giải Ultra HD 4K.",
            'gia' => 12900000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>3,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Máy giặt LG Inverter 8.5 kg ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "maygiat_LG_8_5kg.jpg",
            'mota' => "Thiết kế sang trọng, hiện đại. Vận hành êm, giảm thiểu hư tổn sợi vải nhờ công nghệ 6 chuyển động DD kết hợp trí thông minh nhân tạo AI.",
            'gia' => 9240000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>1,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Máy giặt Toshiba Inverter 8.5 Kg  ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "maygiat_Toshiba_8_5kg.jpg",
            'mota' => "Thiết kế sang trọng, phù hợp với nhiều không gian. Dành cho gia đình có 3 - 5 thành viên nhờ có khối lượng giặt lên đến 8.5 kg.",
            'gia' => 7490000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>1,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Máy giặt Toshiba 8.2 kg  ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "maygiat_Toshiba_8_2kg.jpg",
            'mota' => "Dành cho gia đình có 3 - 5 thành viên nhờ có khối lượng giặt lên đến 8.2 kg.",
            'gia' => 4590000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>1,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tủ lạnh Samsung Inverter 236 lít  ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "tulanh_Samsung_236l.jpg",
            'mota' => "Giữ thịt cá tươi ngon, ăn trong ngày không cần rã đông với ngăn đông mềm -1 độ C Optimal Fresh Zone.",
            'gia' => 6690000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>4,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tủ lạnh Samsung Inverter 208 lít  ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "tulanh_Samsung_208l.jpg",
            'mota' => "Luồng khí lạnh đa chiều cho hơi mát lan tỏa đều đến mọi ngóc ngách trong tủ.",
            'gia' => 5940000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>4,
            'id_nguoi_dung'=>1,   
        ]);
        ////
        DB::table('san_pham')->insert([
            'ten' => "  Tivi LG 4K 43 inch  ",
            'trangthai' => "Đang Bán",
            'hinhanh' => "tivi_LG_4k_43_inch.jpg",
            'mota' => "Thiết kế tivi LG 43 inch nhỏ gọn phù hợp với phòng ngủ, phòng khách.",
            'gia' => 9000000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>15,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tivi Sony 4K 43 inch ",
            'trangthai' => "Đang Bán",
            'hinhanh' => "tivi_SN_4k_32_inch.jpg",
            'mota' => "Thiết kế tinh tế, chân đế hình chữ V vững chắc, kích thước tivi 43 inch, độ phân giải Ultra HD 4K.",
            'gia' => 12900000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>15,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Tủ lạnh Samsung Inverter 236 lít  ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "tulanh_Samsung_236l.jpg",
            'mota' => "Giữ thịt cá tươi ngon, ăn trong ngày không cần rã đông với ngăn đông mềm -1 độ C Optimal Fresh Zone.",
            'gia' => 6690000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>16,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "  Máy lạnh Panasonic 1.5 HP  ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "maylanh_Panasonic_1_5HP.jpg",
            'mota' => "Công suất làm lạnh 1.5 HP, dành cho phòng có diện tích từ 15 đến 20 mét vuông.",
            'gia' =>10590000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>17,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "  Quạt Bàn Asia  ",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "quat_dien_ban_Asia.jpg",
            'mota' => "Công suất 45 W tiết kiệm năng lượng nhưng vẫn tản gió mạnh.",
            'gia' =>540000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>22,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "  Đèn Sạc Điện Quang  ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "den_sac_dien_quang.jpg",
            'mota' => "30 bóng đèn với tổng công suất 2 W, tuổi thọ cao đến 30.000 giờ.",
            'gia' =>430000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>18,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "  Đèn Bàn Học Sinh  ",
            'trangthai' => "Đã Bán",
            'hinhanh' => "den_ban_hs.jpg",
            'mota' => "Sản phẩm cho ánh sáng an toàn với mắt, không gây mỏi mắt, đau mắt.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>24,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Bàn Học Sinh ",
            'trangthai' => "Đang Bán",
            'hinhanh' => "ban_hoc_sinh.jpg",
            'mota' => "Bàn học sinh xếp gọn thuận tiện cho việc học và làm bài tập.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>25,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Quạt Điện",
            'trangthai' => "Đã Bán",
            'hinhanh' => "quat_dien_mp.jpg",
            'mota' => "Đường kính cánh quạt 35 cm, tạo luồng gió mạnh khi hoạt động.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>28,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Áo Quần",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "ao_quan_cu.jpg",
            'mota' => "Những bộ áo quần miễn phí cho những ai cần thiết.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>29,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Dép",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "dep_mp.jpg",
            'mota' => "Những đôi dép miễn phí cho những ai cần.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>30,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Giày",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "giay_mp.jpg",
            'mota' => "Những đôi giày miễn phí cho những ai cần",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>31,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => " Sách Vở",
            'trangthai' => "Chưa Bán",
            'hinhanh' => "sach_vo_mp.jpg",
            'mota' => "Những quyển sách vỡ miễn phí cho những ai cần thiết.",
            'gia' =>0,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>32,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "Ghế Lưới Văn Phòng Lumic",
            'trangthai' => "Đang Bán",
            'hinhanh' => "ghe_vb_Lumic.jpg",
            'mota' => "Lưng ghế cao thiết kế chắc chắn, rộng rãi cùng độ cong vừa phải, giúp bảo vệ cột sống của người ngồi, đảm bảo an toàn và tránh bị đau nhức các khớp xương khi ngồi lâu.",
            'gia' =>890000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>35,
            'id_nguoi_dung'=>1,   
        ]);
        DB::table('san_pham')->insert([
            'ten' => "Bàn Làm Việc Văn Phòng",
            'trangthai' => "Đang Bán",
            'hinhanh' => "ban_lam_viec_vp.jpg",
            'mota' => "mô tả ngắn",
            'gia' =>780000,
            'sdt' => "977485213",
            'noidung'=>"Nội dung",
            'id_loai_san_pham'=>36,
            'id_nguoi_dung'=>1,   
        ]);
    }

}
