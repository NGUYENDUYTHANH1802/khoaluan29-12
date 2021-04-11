<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin;
use App\Models\chung_loai;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Common\Constant;

class CategoryAdminController extends Controller
{
	 public function index(){
    	
    	return view('Admin.pages.category.add');
    }

     public function add(Request $req)
    {
       
        $dataReq = $req->all();
        // dd($dataReq);

        $rules = [
           'ten' =>'required|max:50',
        ];

        $messages = [
            'ten.required' => 'Vui lòng nhập tên!',
            'ten.max' => 'Tên tài khoản không được quá :max ký tự!'
        ];

        $validator = Validator::make($dataReq, $rules, $messages);
      

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        unset($dataReq['_token']);

        // dd($dataReq);
    	chung_loai::create($dataReq);
        // dd($dataReq);
    	return redirect('admin/List-category')->with(Constant::TYPE_MSG_OK, 'Đăng ký chủng loại thành công!');
    }   

    public function getSua($id){
        
        $user = chung_loai::find($id);
     
        return view('Admin.pages.category.edit', compact(['user']));

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

        $user = chung_loai::find($id);
        $user->ten = $req->ten;
   
        $user->save();
        return redirect('admin/edit/'.$id)->with(Constant::TYPE_MSG_OK, Constant::MSG_EDIT_OK);
    }

    public function list()
    {

        $cg = chung_loai::orderBy('id','DESC')->get();
        return view('admin.pages.category.list', compact(['cg']));
    	// return view ('admin.pages.category.list');
    }

     public function getXoa($id){
        $user = chung_loai::find($id);
        $user -> delete();
        return redirect('admin/List-category')->with(Constant::TYPE_MSG_OK, Constant::MSG_DELETE_OK);
    }
}
