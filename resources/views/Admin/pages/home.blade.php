@extends('admin.layout.index')

@section('title')
    Quản Trị Viên
@endsection

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Thống Kê</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Thống Kê</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Người Dùng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/list-account">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Sản Phẩm</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/List-product">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Loại Sản Phẩm</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/product-type">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Chủng Loại</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/List-category">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Bài viết trong 30 ngày qua
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Thảo luận trong 30 ngày qua
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
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
                                                                <img width="100px" src="user/img/img-detail/{{ $pr->hinhanh }}">
                                                            </td>
                                                            <td>{{ $pr->trangthai }}</td>
                                                            <td>{{ \Illuminate\Support\Str::limit($pr->mota, 39, '...') }}</td>
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
                        </div>
                    </div>
                </main>
@endsection