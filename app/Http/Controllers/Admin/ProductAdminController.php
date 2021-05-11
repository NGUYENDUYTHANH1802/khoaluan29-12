<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Admin;
use App\Common\Constant;
use App\Models\nguoi_dung;
use Illuminate\Support\Facades\Hash;
use App\Models\san_pham;

class ProductAdminController extends Controller
{
    //
   public function list()
    {

        $product = san_pham::orderBy('id','DESC')->get();
        return view('admin.pages.product.list', compact(['product']));
    	
    }

    public function getXoa($id){
        
        $product = san_pham::find($id);
        $product -> delete();
        return redirect('admin/pages/product/list')->with('message', 'Đã xóa sản phẩm thành công.');

    }
}
