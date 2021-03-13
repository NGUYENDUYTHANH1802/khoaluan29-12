<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\nguoi_dung;
use App\Common\Constant;


class LoginUserController extends Controller
{
    // layout login account
    public function index(){
        return view('User.pages.login');
    }

    public function login(Request $req)
    {
        // Bước 1: Lấy thông tin đăng nhập từ form
        $dataReq = $req->all();

        // Bước 2: Kiểm tra giá trị nhập từ Input
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'required' => ':attribute không được để trống.',
            'email' => ':attribute không đúng định dạng.',
        ];

        $validator = Validator::make($dataReq, $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Bước 3: Kiểm tra có tồn tại tài khoản tương ứng không?
        // + Viết truy vấn lấy email ra $dataReq['email']
        $user = nguoi_dung::where('email', $dataReq['email'])->first();

        if (!$user) {
            // User không tồn tại
            $validator->errors()->add('loginFails', 'Tài khoản chưa tồn tại!');
            return back()->withErrors($validator)->withInput();
           
        }
       
        // + Kiểm tra Email trên có đúng mật khẩu không
        if (!Hash::check($dataReq['password'], $user->password))
        {
            $validator->errors()->add('loginFails', 'Mật khẩu chưa đúng, vui lòng kiểm tra lại!');
            return back()->withErrors($validator)->withInput();
        }
        
        // Bước 4: Tạo session lưu lại thông tin phiên đăng nhập?
        $req->session()->put('loginInfo', $user);

        // dd($req->session()->get('loginInfo')->ten);

        // Bước 5: Trả về trang chủ với trạng thái đã đăng nhập tài khoản
       
        if ($user->quyen === Constant::ROLE['USER'] ) {
            return redirect('home');
        }
        elseif ($user->quyen === Constant::ROLE['ADMIN'] ) {
            return redirect('admin/home-admin');
        }    
    }

    public function logout(Request $req)
    {
        $req->session()->forget('loginInfo');
        return redirect('home');
    }
}
