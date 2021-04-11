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
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Chức năng</th> 
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($cg  as $ctg)
                                <tr>
                                    <td>{{ $ctg->id }}</td>
                                    <td>{{ $ctg->ten }}
                                       <!--  <img width="100px" src="user/img/item/{{ $ctg->hinhanh }}"> -->
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm"> <a class="text-white" href="admin/edit-category/{{ $ctg->id }}"> Sửa</a></button>
                                        <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="admin/deleteCategory/{{ $ctg->id }}">
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