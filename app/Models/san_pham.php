<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    use HasFactory;
    protected $table ="san_pham";
    
    public function loaiSanPham()
    {
        return $this->belongsTo('App\Models\loai_san_pham','id_loai_san_pham','id');
    }

    public function nguoiDung()
    {
        return $this->belongsTo('App\Models\nguoi_dung','id_nguoi_dung','id');
    }
}
