<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\san_pham;

class HomeAdminController extends Controller
{
    //
    public function index(){
        
        // return view('Admin.pages.home');
         $product = san_pham::orderBy('id','DESC')->get();
        return view('Admin.pages.home', compact(['product']));
    }
}
