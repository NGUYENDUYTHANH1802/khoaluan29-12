<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoi_dung extends Model
{
    use HasFactory;
    protected $table ="nguoi_dung";
    public function chungLoai()
    {
        return $this->hasMany('App\Models\san_pham','id_nguoi_dung','id');
    }

    
}
