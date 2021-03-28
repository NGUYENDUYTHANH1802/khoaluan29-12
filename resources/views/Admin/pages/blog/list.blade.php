@extends('admin.layout.index')

@section('title')
Danh sách tài khoản
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh sách bài viết</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách bài viết</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Tùy chọn</th>
                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($blog as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->tieude }}</td>
                                    <td>{{ $blog->mota }}</td>
                                    <td class="text-center">
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