@extends('admin.layout.index')

@section('title')
Danh sách tài khoản
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh sách tài khoản</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách tài khoản</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Tính năng</th>
                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Tính năng</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->ten }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <select name="" id="" class="form-control">
                                            <option value="NGUOI_DUNG" {{ $user->quyen === "NGUOI_DUNG" ? "selected" : "" }}>Người dùng</option>
                                            <option value="QUAN_TRI" {{ $user->quyen === "QUAN_TRI" ? "selected" : "" }}>Quản trị</option>                   
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm">Lưu</button>
                                        <button type="button" class="btn btn-info btn-sm">Sửa</button>
                                        <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                                    </td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection