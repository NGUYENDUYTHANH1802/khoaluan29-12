<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    //
    public function index(){
        
        return view('User.pages.register');
    }
    
    public function register(Request $req){
        $dataReq = $req->all();

        
    }   
}
