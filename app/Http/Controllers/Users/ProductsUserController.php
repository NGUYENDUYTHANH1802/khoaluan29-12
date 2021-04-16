<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\san_pham;
use Session; 
use App\Models\chung_loai;
use App\Models\loai_san_pham;
use Validator;


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
        // dd($dataSave);
        $dataReq = $request->all();
        // dd($dataReq);
        $rules = [
           'ten' =>'required|max:100',
           'hinhanh' =>'required',
           'mota' =>'required|max:1000',   
           'gia' =>'required|max:15',
           'sdt' =>'required|max:10',
           'noidung' =>'required',
            
        ];

        $messages = [
            'ten.required' => 'Vui lòng nhập tiêu đề!',
            'ten.max' => 'Tên tiêu đề không được quá :max ký tự!',
            'hinhanh.required' => 'Vui lòng chọn hình ảnh!',
            'mota.required' => 'Vui lòng nhập mô tả!',
            'mota.max' => 'Mô tả không được quá :max ký tự!',
            'gia.required' => 'Vui lòng nhập giá sản phẩm!',
            'gia.max' => 'giá sản phẩm không được quá :max ký tự!',
            'sdt.required' => 'Vui lòng nhập số điện thoại!',
            'sdt.max' => 'Số điện thoại không được quá :max ký tự!',
            'noidung.required' => 'Vui lòng nhập nội dung!',

        ];

        $validator = Validator::make($dataReq, $rules, $messages);
      
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         unset($dataReq['_token']);
        

        $products = new san_pham();

        $products->ten = $request->ten;
        $products->mota = $request->mota;
        $products['trangthai'] = 'Chưa bán';
        $products->gia = $request->gia;
        $products->sdt = $request->sdt;
        $products->noidung = $request->noidung;
        $products->id_nguoi_dung = $request->Session()->get('loginInfo')->id;
        $products->id_loai_san_pham = $request->id_loai_san_pham;
        

       
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            
            $imageName = time().$request->hinhanh->getClientOriginalName();
            $request->hinhanh->move(public_path('user/img/img-detail/'), $imageName);
           
            $products->hinhanh = $imageName;
        }
        
        $products->save();
       
        return redirect('products.html');
    	
    }

    public function view($id)
    {
        $products = san_pham::where('id', $id)->first();
        return view('user.pages.products',compact(['products']));

    }
}