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

  //    public function index()
  //   {
	 // 	return view('admin.pages.product.add');
  //   }

 	// public function create(Request $request)
  //   {
  //   	$blog = new bai_viet();

  //      	$blog->mota = $request->mota;
  //   	$blog->tieude = $request->tieude;
  //   	$blog->id_nguoi_dung =2;
  //   	$blog->noidung = $request->noidung;
    	
  //       if ($request->hasFile('hinhanh')) {
  //           $file = $request->file('hinhanh');
            
  //           $imageName = time().$request->hinhanh->getClientOriginalName();
  //           $request->hinhanh->move(public_path('User/img/blog/'), $imageName);
  //           $blog->hinhanh = $imageName;
  //       }
  //       $blog->save();
  //       return redirect('admin/list-blog');
  //       // return redirect('blog.html');
  //   }
    public function getXoa($id){
        
        $product = san_pham::find($id);
        $product -> delete();
        return redirect('admin/pages/product/list')->with('message', 'Đã xóa sản phẩm thành công.');

    }
}
