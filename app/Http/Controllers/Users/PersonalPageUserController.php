<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalPageUserController extends Controller
{
    //
    public function index(){
        
        return view('User.pages.personal-page');
    }
}
