<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bai_viet extends Model
{
    use HasFactory;
    protected $table ="bai_viet";

    public function nguoiDung()
    {
        return $this->belongsTo('App\Models\nguoi_dung','id_nguoi_dung','id');
    }
}
