<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chung_loai;
use App\Models\san_pham;
use App\Models\nguoi_dung;

class HomeUserController extends Controller
{
    public function index(){
        $sanPhamNoiBat = san_pham::inRandomOrder()->limit(9)->get();
        $sanPhamNgauNhien = san_pham::inRandomOrder()->limit(12)->get();
        
        return view('user.pages.home', compact(['sanPhamNoiBat','sanPhamNgauNhien']));
    }
}
