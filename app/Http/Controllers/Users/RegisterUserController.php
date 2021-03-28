<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Users;

use App\Models\nguoi_dung;

class RegisterUserController extends Controller
{
    //
    public function index(){
        return view('User.pages.register');
    }
    
    public function register(Request $req)
    {
    	$req->validate([
    		'ten' =>'required',
    		'email' =>'required',
    		'password' => 'required'
    	]);

    	nguoi_dung::create($req->all());

    	return redirect()->route('login')->with();
        // $dataReq = $req->all();
       
		
        // $rules = [

        //     'email' => 'required|email',
        //     'password' => 'required'
        // ];
        // $messages = [
        //     'required' => ':attribute không được để trống.',
        //     'email' => ':attribute không đúng định dạng.',
        // ];

        // $validator = Validator::make($dataReq, $rules, $messages);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        

      
        // dd($req->session()->get('registerInfo'));
    }   

    //  public function registerout(Request $req)
    // {
    //     $req->session()->forget('registerInfo');
    //     return redirect('login');
    // }
}
