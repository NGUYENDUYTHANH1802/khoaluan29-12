@extends('admin.layout.index')

@section('title')
Sửa Loại Sản Phẩm
@endsection

@section('content')
<main >
	<div class="container-fluid">
		<h1 class="mt-4">Sửa Loại Sản Phẩm</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
			<li class="breadcrumb-item active">Sửa Loại Sản Phẩm</li>
		</ol>
		<div class="row">
			<div class="col-12">
        <form class="contactform" action="admin/edit-productType/{{ $categories->id }}" method="post">
          @csrf                          
          <div class="aa-single-field mb-2">
            <label for="ten">Tên Loại Sản Phẩm <span class="required">*</span></label>
            <input class="form-control py-4" type="text" aria-required="true" value="{{ $categories->ten }}" name="ten" >
          </div>
          
          <div class="form-group">
            <label for="permission">Chủng Loại</label>
            <select name="id_chung_loai" class="form-control">
              
           </select>
         </div>
         
         <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 ">
           <button type="reset" class="btn btn-secondary"> Hủy bỏ</button>
           <input type="submit" value="Sửa" class="btn btn-danger">                 
         </div>
       </form>

     </div>
   </div>
 </div>
</main>
@endsection