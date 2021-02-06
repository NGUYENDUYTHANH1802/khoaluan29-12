<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chung_loai;
use App\Models\san_pham;
use App\Models\loai_san_pham;

class detailUserController extends Controller
{
    //
    public function index($id)
    {
        $detail = san_pham::where('id', $id)->first();
        // $type = san_pham::where('id', '<>', $id)->where('id_the_loai', '<>', $product->id_the_loai)->get();

        // Kiểm tra kêt quả có phải là Null hoặc Empty không!
        if ($detail) {
            $msg = "Không có sản phẩm!";
        }

        $sanPhamCungTheLoai = san_pham::where('id_loai_san_pham','$id_loai_san_pham')->get();

        return view('User.pages.detail',compact(['detail','sanPhamCungTheLoai']));

    }
}
