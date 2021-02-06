<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chung_loai;
use App\Models\san_pham;
use App\Models\loai_san_pham;


class typeUserController extends Controller
{
    //
    public function index(Request $req){
        $products = san_pham::where('id_loai_san_pham', $req->idType)->paginate(3);
        // dd($products);
        return view('User.pages.type',compact(['products']));
    }

    public function product($id)
    {
        $product = san_pham::where('id', $id)->first();
        // $type = san_pham::where('id', '<>', $id)->where('id_the_loai', '<>', $product->id_the_loai)->get();

        // Kiểm tra kêt quả có phải là Null hoặc Empty không!
        if ($product) {
            $msg = "Không có sản phẩm!";
        }

        dd($product);
    }
}
