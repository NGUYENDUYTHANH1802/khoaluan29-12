@extends('admin.layout.index')

@section('content')
<main>
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
						<label class="small mb-1" for="inputEmailAddress">Email</label>
						<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
					</div>
					<div class="form-group">
						<label class="small mb-1" for="inputPassword">Password</label>
						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
							<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
						</div>
					</div>
					<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
						<a class="small" href="password.html">Forgot Password?</a>
						<a class="btn btn-primary" href="index.html">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection