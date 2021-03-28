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
				<form>
					<div class="form-group">
						<label class="small mb-1" for="inputEmailAddress">Tên</label>
						<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Nhập Họ Tên" />
					</div>
					<div class="form-group">
						<label class="small mb-1" for="inputEmailAddress">Email</label>
						<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Nhập Địa chỉ Email" />
					</div>
					<div class="form-group">
						<label class="small mb-1" for="inputPassword">Mật Khẩu</label>
						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Nhập Mật Khẩu" />
					</div>
					<div class="form-group">
						<label for="permission">Quyền</label>
						<select name="" id="" class="form-control">
							<option value="">Quản Trị</option>
							<option value="">Người Dùng</option>
						</select>
					</div>
					<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
						<button type="reset" class="btn btn-secondary">Hủy bỏ</button>
						<button type="submit" class="btn btn-danger	">Đăng ký</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection