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
                                        {{ $user->quyen === "NGUOI_DUNG" ? "Người dùng" : "Quản trị" }}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm"> <a class="text-white" href="admin/edit/{{ $user->id }}"> Sửa</a></button>
                                        <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="admin/deleteUses/{{ $user->id }}">
                                            Xóa
                                        </a> </button>
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