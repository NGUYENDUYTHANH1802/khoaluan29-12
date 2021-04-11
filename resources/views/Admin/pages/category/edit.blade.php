@extends('admin.layout.index')

@section('title')
Sửa Chủng Loại
@endsection

@section('content')
<main >
	<div class="container-fluid">
		<h1 class="mt-4">Sửa Chủng Loại</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
			<li class="breadcrumb-item active">Sửa Chủng Loại</li>
		</ol>
		<div class="row">
			<div class="col-12">
        <form class="contactform" action="admin/edit/{{ $user->id }}" method="post">
          @csrf                          
          <div class="aa-single-field mb-2">
            <label for="ten">Tên Chủng Loại <span class="required">*</span></label>
            <input class="form-control py-4" type="text" aria-required="true" value=" {{ $user->ten }}" name="ten" placeholder="Nhập Tên Chủng Loại">
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