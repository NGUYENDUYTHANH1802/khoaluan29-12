<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Common\Constant;
use App\Models\nguoi_dung;
use App\Models\san_pham;
use App\Models\chung_loai;
use App\Models\loai_san_pham;
use Illuminate\Support\Facades\Hash;

class EditProductUserController extends Controller
{
    //
    public function index($id){
         $EditProduct = san_pham::find($id);
         $categories = chung_loai::all();
         $types = loai_san_pham::where('id_chung_loai', $categories[0]->id)->get();
        return view('User.pages.PostProduct.EditProduct', compact('EditProduct','categories','types'));
    }

   public function ajaxTypes(Request $request){
        return loai_san_pham::where('id_chung_loai', $request['id'])->get();
    }
    

     public function postProduct(Request $request,$id)
    {
        $dataSave = $request->all();
        // $dataSave['trangthai'] = 'Chưa bán';
        // // dd($dataSave);
        $dataReq = $request->all();
       
        
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
        

        
        $EditProduct = san_pham::find($id);
           
        $EditProduct->ten = $request->ten;
        $EditProduct->mota = $request->mota;
        $EditProduct->trangthai = $request->trangthai;
        $EditProduct->gia = $request->gia;
        $EditProduct->sdt = $request->sdt;
        $EditProduct->noidung = $request->noidung;
        $EditProduct->id_nguoi_dung = $request->Session()->get('loginInfo')->id;
        $EditProduct->id_loai_san_pham = $request->id_loai_san_pham;

      
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $imageName = time().$request->hinhanh->getClientOriginalName();
            $request->hinhanh->move(public_path('user/img/img-detail/'), $imageName);
            
            $EditProduct->hinhanh = $imageName;
        }
    
       

        $EditProduct->save();
       
        // return redirect('user/pages/products'.$id);
        return redirect('EditUserProduct.html/'.$id)->with('messages', 'Sửa thông tin sản phẩm thành công.');
        
        
    }

     public function getXoa($id){
        $EditProduct = san_pham::find($id);
        $EditProduct -> delete();
        return redirect('products.html');
    }

}
