<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chung_loai extends Model
{
    use HasFactory;
    protected $table ="chung_loai";
    public function loaiSanPham()
    {
        return $this->hasMany('App\Models\loai_san_pham','id_chung_loai','id');
    }

    public function sanPham()
    {
        return $this->hasManyThrough('App\Models\san_pham','app\Models\loai_san_pham','id_chung_loai','id_loai_san_pham','id');
    }
}
