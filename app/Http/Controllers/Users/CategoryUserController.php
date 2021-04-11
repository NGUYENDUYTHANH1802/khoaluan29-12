<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chung_loai;
use App\Models\san_pham;
use App\Models\loai_san_pham;

class CategoryUserController extends Controller
{
    /** 
     * Create layout category for user page 
     */
    public function index($id)
    {
        // dd($id);
        // Cach lay toan bo the loai thuoc 1 loai nao do
        $types = loai_san_pham::where('id_chung_loai', $id)->get();

        $typeID = [];
        foreach ($types as $type) {
            array_push($typeID, $type->id);
        }

        $productsByIDCategory = san_pham::whereIn('id_loai_san_pham', $typeID)->paginate(1);

        $productsRandom = san_pham::whereNotIn('id_loai_san_pham', $typeID)->limit(6)->get();
        // dd($productsRandom);
        // dd($typeID);
         
        $sanPhamPhoBien = san_pham::inRandomOrder()->limit(3)->get();
        return view('user.pages.category', compact(['types', 'productsByIDCategory', 'productsRandom','sanPhamPhoBien']));
    }
}
