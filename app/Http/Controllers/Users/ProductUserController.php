<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    //
    public function index(){
        
        return view('User.pages.product');
    }
}
