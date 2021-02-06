<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_san_pham extends Model
{
    use HasFactory;
    protected $table ="loai_san_pham";
    public function chungLoai()
    {
        return $this->belongsTo('App\Models\chung_loai','id_chung_loai','id');
    }

    public function sanPham()
    {
        return $this->hasMany('App\Models\san_pham','id_loai_san_pham','id');
    }
}
