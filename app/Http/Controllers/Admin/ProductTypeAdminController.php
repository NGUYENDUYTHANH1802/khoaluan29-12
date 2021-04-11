<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loai_san_pham;
use Validator;
use App\Common\Constant;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\chung_loai;

class ProductTypeAdminController extends Controller
{

	 public function index(){
    	$categories = chung_loai::all();
    	return view('Admin.pages.productType.add',compact(['categories']));
        
    }

     public function add(Request $req)
    { 
       
        $dataReq = $req->all();

        $rules = [
           'ten' =>'required|max:50',

        ];

        $messages = [
            'ten.required' => 'Vui lòng nhập tên!',
            'ten.max' => 'Tên tài khoản không được quá :max ký tự!',   
        ];

        $validator = Validator::make($dataReq, $rules, $messages);
        


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         unset($dataReq['_token']);
        
     //    Save data for table Loại sản phẩm
    
    	loai_san_pham::create($dataReq);
     
    	return redirect('admin/product-type')->with(Constant::TYPE_MSG_OK, 'Thêm mới loại sản phẩm thành công.');

    }   

     public function getSua($id){
        
          $productTP =  loai_san_pham::find($id);
          $categories = chung_loai::all();
         
          return view('Admin.pages.productType.edit',compact(['productTP','categories']));
    }

    public function postSua(Request $req,$id){

        $rules = [
           'ten' =>'required|max:50',
            
        ];

        $messages = [
            'ten.required' => 'Vui lòng nhập tên!',
            'ten.max' => 'Tên tài khoản không được quá :max ký tự!',
        ];

        $validator = Validator::make($req->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $productTP = loai_san_pham::find($id);
        $productTP->ten = $req->ten;
        $productTP->id_chung_loai = $req->id_chung_loai;
       
       // dd($productTP);

       
        $productTP->save();
        return redirect('admin/edit-productType/'.$id)->with(Constant::TYPE_MSG_OK, Constant::MSG_EDIT_OK);
    }


    public function list()
    {

        $productTP = loai_san_pham::orderBy('id','DESC')->get();
       
        return view('admin.pages.productType.list', compact(['productTP']));
    	
    }

     public function getXoa($id){
        $productTP = loai_san_pham::find($id);
        $productTP -> delete();
        return redirect('admin/product-type')->with(Constant::TYPE_MSG_OK, Constant::MSG_DELETE_OK);
    }
}
