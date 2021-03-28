<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoi_dung extends Model
{
    use HasFactory;
    
    protected $table ="nguoi_dung";

    protected $fillable = ['ten','email', 'password', 'quyen'];

    public $timestamps = false;

    public function chungLoai()
    {
        return $this->hasMany('App\Models\san_pham','id_nguoi_dung','id');
    }

    public function baiViet()
    {
        return $this->hasMany('App\Models\bai_viet','id_nguoi_dung','id');
    }
}
