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
    
    // Type messages
    const TYPE_MSG_OK = 'msgOK';
    const TYPE_MSG_INF = 'msgINF';
    const TYPE_MSG_ERR = 'msgERR';
    // Message success
    const MSG_DELETE_OK = 'Đã xóa dữ liệu thành công!';
    const MSG_ADD_OK = 'Đã thêm liệu thành công!';
    const MSG_EDIT_OK = 'Đã cập nhật liệu thành công!';
    // Message error
    const MSG_DELETE_ERR = 'Xóa dữ liệu thất bại!';
    const MSG_ADD_ERR = 'Thêm liệu thất bại!';
    const MSG_EDIT_ERR = 'Đã cập nhật thất bại!';
}
