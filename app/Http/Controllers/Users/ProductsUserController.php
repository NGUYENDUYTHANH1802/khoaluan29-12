<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\san_pham;
use Session; 
use App\Models\chung_loai;
use App\Models\loai_san_pham;


class ProductsUserController extends Controller
{
    /** 
     * Create layout category for user page 
     */
    public function index()
    {
        $loginId = Session::get('loginInfo')->id;
    	$products = san_pham::where('id_nguoi_dung', $loginId)->paginate(6);
        return view('user.pages.products', compact(['products']));
    }

     /** 
     */
    public function create()
    {
        $categories = chung_loai::all();
        $types = loai_san_pham::where('id_chung_loai', $categories[0]->id)->get();
        return view('user.pages.createProducts', compact('categories','types'));
    }

    public function ajaxTypes(Request $request){
        return loai_san_pham::where('id_chung_loai', $request['id'])->get();
    }

    public function postCreate(Request $request)
    {
        $dataSave = $request->all();
        $dataSave['trangthai'] = 'Chưa bán';
        dd($request->all());
    	// $blog = new bai_viet();

     //   	$blog->mota = $request->mota;
    	// $blog->tieude = $request->tieude;
    	// $blog->id_nguoi_dung =2;
    	// $blog->noidung = $request->noidung;
    	
     //    if ($request->hasFile('hinhanh')) {
     //        $file = $request->file('hinhanh');
            
     //        $imageName = time().$request->hinhanh->getClientOriginalName();
     //        $request->hinhanh->move(public_path('User/img/blog/'), $imageName);
     //        $blog->hinhanh = $imageName;
     //    }
     //    $blog->save();

        return redirect('blog.html');
    }

    public function view($id)
    {
        $blog = bai_viet::where('id', $id)->first();
        return view('User.pages.blogdetail',compact(['blog']));

    }
}