@extends('admin.layout.index')

@section('title')
Danh sách Sản Phẩm
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh sách Sản Phẩm</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách Sản Phẩm</li>
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
                                    <th>Trạng thái</th>
                                    <th>Mô Tả</th>
                                    <th>Gía</th>
                                    <th>Số ĐT</th>
                                    <th>Nội Dung</th>
                                    <th>Người Đăng</th>
                                    <th>Chức Năng</th>
                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Trạng thái</th>
                                    <th>Mô Tả</th>
                                    <th>Gía</th>
                                    <th>Số ĐT</th>
                                    <th>Nội Dung</th>
                                    <th>Người Đăng</th>
                                    <th>Chức Năng</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($product as $pr)
                                <tr>
                                    <td>{{ $pr->id }}</td>
                                    <td>{{ $pr->ten }}
                                        <img width="100px" src="user/img/item/{{ $pr->hinhanh }}">
                                    </td>
                                    <td>{{ $pr->trangthai }}</td>
                                    <td>{{ $pr->mota }}</td>
                                    <td>{{ $pr->gia }}</td>
                                    <td>{{ $pr->sdt }}</td>
                                    <td>{{ $pr->noidung }}</td>
                                     <td>{{ $pr->nguoidung->ten }}</td>
                                    <td class="text-center">
                                       
                                        <button type="button" class="btn btn-danger btn-sm"><a class="text-white href="admin/deleteProduct/{{ $pr->id }}">
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