<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nguoi_dung;

class CategoryManagerAdminController extends Controller
{
    //
    public function index(Request $req){
    	 $pro = nguoi_dung::where('all');
        // dd($pro);

        return view('Admin.pages.category-manager');
    }
}
