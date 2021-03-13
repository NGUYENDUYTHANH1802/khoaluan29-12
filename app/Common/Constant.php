<?php

namespace App\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constant
{
    const ROLE = [
        'ADMIN' => 'QUAN_TRI',
        'USER' => 'NGUOI_DUNG'
    ];
}
