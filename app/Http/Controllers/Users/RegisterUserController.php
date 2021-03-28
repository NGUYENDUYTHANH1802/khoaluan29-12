<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Users;
use App\Common\Constant;
use App\Models\nguoi_dung;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    //
    public function index(){
        return view('User.pages.register');
    }
    
    public function register(Request $req)
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
        // Hash password
        $dataReq['password'] = Hash::make($dataReq['password']);
        // Create column default
        $dataReq['quyen'] = Constant::ROLE['USER'];
    
        // Save data for table nguoi_dung
    	nguoi_dung::create($dataReq);

    	return redirect('login')->with('message', 'Đăng ký tài khoản thành công vui lòng đăng nhập.');
    }   

    //  public function registerout(Request $req)
    // {
    //     $req->session()->forget('registerInfo');
    //     return redirect('login');
    // }
}
