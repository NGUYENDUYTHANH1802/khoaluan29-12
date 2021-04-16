<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\San_Pham;


class SeachController extends Controller
{
    public function postTimKiem(Request $req){
        
        $dataReq = $req->all();

        $trangThai = '';
        switch ($dataReq['trang_thai_sp']) {
        	case '1':
        		$trangThai = 'Đang Bán';
        		break;
        	case '2':
        		$trangThai = 'Đã Bán';
        		break;
        	case '3':
        		$trangThai = 'Chưa Bán';
        		break;
        }
        $dataReq['trang_thai_sp'] = $trangThai;
        $searchProducts = new San_Pham();
        if (!empty($dataReq['ten_san_pham'])) {
        	$searchProducts = $searchProducts->where('ten', 'like', $dataReq['ten_san_pham']);
        }
        if ($dataReq['trang_thai_sp'] !== '') {
        	$searchProducts = $searchProducts->where('trangthai', $dataReq['trang_thai_sp']);
        }
        if ($dataReq['loai_san_pham'] !== '0') {
        	$searchProducts = $searchProducts->where('id_loai_san_pham', $dataReq['loai_san_pham']);
        }
        if ($dataReq['nguoi_ban'] !== '0') {
        	$searchProducts = $searchProducts->where('id_nguoi_dung', $dataReq['nguoi_ban']);
        }
        $searchProducts = $searchProducts->paginate(9);
       	
        return view('user.pages.search-products', compact(['searchProducts']));
    }
}
