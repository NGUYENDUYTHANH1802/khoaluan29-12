<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bai_viet;

class BlogAdminController extends Controller
{
    /** 
     * Create layout category for user page 
     */
    public function index()
    {
	 	return view('admin.pages.blog.add');
    }

 	public function create(Request $request)
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
        return redirect('admin/list-blog');
        // return redirect('blog.html');
    }


    public function list()
    {
    	$blog = bai_viet::all();
    	return view('admin.pages.blog.list', compact(['blog']));
    }
}
