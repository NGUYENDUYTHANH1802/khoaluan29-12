<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Admin;
use App\Common\Constant;
use App\Models\nguoi_dung;
use Illuminate\Support\Facades\Hash;



class AccountController extends Controller
{

    public function list()
    {
    	$users = nguoi_dung::all();
    	return view('Admin.pages.account.list-account', compact(['users']));
    }
    
    public function index(){
    	
    	return view('Admin.pages.account.add');
    }

     public function add(Request $req)
    {
       
        $dataReq = $req->all();


        $rules = [
           'ten' =>'required|max:50',
            'email' =>'required|unique:nguoi_dung|email|max:100',
            'password' => 'required|max:30|min:6|confirmed',
    
        ];

        $messages = [
            'ten.required' => 'Vui lòng nhập tên!',
            'ten.max' => 'Tên tài khoản không được quá :max ký tự!',
            'email.required' => 'Vui lòng nhập emai!',
            'email.unique' => 'Email đã tồn tại, vui lòng kiểm tra lại!',
            'email.email' => 'Email không hợp lệ, vui lòng kiểm tra lại!',
            'email.max' => 'Email không được quá :max ký tự!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.max' => 'Mật khẩu không vượt quá :max ký tự!',
            'password.min' => 'Mật khẩu phải lớn hơn :min ký tự!',
            'confirmed' => 'Mật khẩu không khớp!'

        ];

        $validator = Validator::make($dataReq, $rules, $messages);
      


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


       // Remove item not save
        unset($dataReq['_token']);
        unset($dataReq['password_confirmation']);
        //Hash password
        $dataReq['password'] = Hash::make($dataReq['password']);
        // Create column default
        $dataReq['quyen'] = Constant::ROLE['USER'];
    // dd($dataReq);
    // 
     //    Save data for table nguoi_dung
    
    	nguoi_dung::create($dataReq);

    	return redirect('admin/list-account')->with(Constant::TYPE_MSG_OK, 'Đăng ký tài khoản thành công vui lòng đăng nhập.');
    }   

    public function getSua($id){
        
        $user = nguoi_dung::find($id);
     
        return view('Admin.pages.account.edit', compact(['user']));

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
       
        $user = nguoi_dung::find($id);
        $user->ten = $req->ten;
        $user->quyen = $req->quyen;
        

        if ($req->changePassword == "on")
        {   
             $rules = [
            'password' => 'required|max:30|min:6|confirmed',
             ];

            $messages = [
                'password.required' => 'Vui lòng nhập mật khẩu!',
                'password.max' => 'Mật khẩu không vượt quá :max ký tự!',
                'password.min' => 'Mật khẩu phải lớn hơn :min ký tự!',
                'confirmed' => 'Mật khẩu không khớp!'
            ];

            $validator = Validator::make($req->all(), $rules, $messages);
      

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            
            $user->password = bcrypt($req->password);
        }
        $user->save();
        return redirect('admin/edit/'.$id)->with(Constant::TYPE_MSG_OK, Constant::MSG_EDIT_OK);
    }

    public function getXoa($id){
        $user = nguoi_dung::find($id);
        $user -> delete();
        return redirect('admin/list-account')->with(Constant::TYPE_MSG_OK, Constant::MSG_DELETE_OK);
    }
}
 // $user = User::find($id);
        // return view('Admin.pages.account.repair',['user'=>$user]);