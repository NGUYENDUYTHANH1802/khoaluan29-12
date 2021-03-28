<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bai_viet;

class BlogUserController extends Controller
{
    /** 
     * Create layout category for user page 
     */
    public function index()
    {
    	$blog = bai_viet::paginate(6);
        return view('user.pages.blog', compact(['blog']));
    }

     /** 
     */
    public function create()
    {
        return view('user.pages.createblog');
    }

    public function postCreate(Request $request)
    {
    	$blog = new bai_viet();

       	$blog->mota = $request->mota;
    	$blog->tieude = $request->tieude;
    	$blog->id_nguoi_dung =2;
    	$blog->noidung = $request->noidung;
    	
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            
            $imageName = time().$request->hinhanh->getClientOriginalName();
            $request->hinhanh->move(public_path('User/img/blog/'), $imageName);
            $blog->hinhanh = $imageName;
        }
        $blog->save();

        return redirect('blog.html');
    }

    public function view($id)
    {
        $blog = bai_viet::where('id', $id)->first();
        return view('User.pages.blogdetail',compact(['blog']));

    }
}