<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nguoi_dung;

class AccountController extends Controller
{

    public function list()
    {
    	$users = nguoi_dung::all();
    	return view('Admin.pages.account.list-account', compact(['users']));
    }
    
    public function add(){
    	
    	return view('Admin.pages.account.add');
    }


}
