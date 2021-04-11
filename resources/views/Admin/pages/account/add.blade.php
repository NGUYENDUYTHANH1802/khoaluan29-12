@extends('admin.layout.index')

@section('title')
Thêm tài khoản
@endsection

@section('content')
<main >
	<div class="container-fluid">
		<h1 class="mt-4">Thêm mới tài khoản</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
			<li class="breadcrumb-item active">Thêm tài khoản</li>
		</ol>
		<div class="row">
			<div class="col-12">
        <form class="contactform" action="admin/add.html" method="post">
          @csrf                          
          <div class="aa-single-field mb-2">
            <label for="ten">Tên <span class="required">*</span></label>
            <input class="form-control py-4" type="text" aria-required="true" value="{{ old('ten') }}" name="ten" placeholder="Nhập Họ Tên">
          </div>
          <div class="aa-single-field mb-2">
            <label for="email">Email <span class="required">*</span></label>
            <input class="form-control py-4" type="email"  aria-required="true" value="{{ old('email') }}" name="email" placeholder="Nhập Email">
          </div>
          <div class="aa-single-field mb-2">
            <label for="password">Mật Khẩu <span class="required">*</span></label>
            <input class="form-control py-4" type="password" name="password" value="{{ old('password') }}" placeholder="Nhập mật khẩu"> 
          </div>
          <div class="aa-single-field mb-2">
            <label for="confirm-password">Xác Nhận Mật Khẩu <span class="required">*</span></label>
            <input class="form-control py-4" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Nhập lại mật khẩu"> 
          </div>
          <div class="form-group">
            <label for="permission">Quyền</label>
            <select name="quyen" class="form-control">
             <option value="QUAN_TRI">Quản Trị</option>
             <option value="NGUOI_DUNG">Người Dùng</option>
           </select>
         </div>
         
         <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 ">
           <button type="reset" class="btn btn-secondary"> Hủy bỏ</button>
           <input type="submit" value="Đăng Ký" class="btn btn-danger">                 
         </div>
       </form>

     </div>
   </div>
 </div>
</main>
@endsection