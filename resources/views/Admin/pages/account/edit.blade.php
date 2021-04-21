@extends('admin.layout.index')

@section('title')
Sửa tài khoản
@endsection

@section('content')
<main >
  <div class="container-fluid">
    <h1 class="mt-4">Sửa tài khoản</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
      <li class="breadcrumb-item active">Sửa tài khoản</li>
    </ol>
    
    <div class="row">
      <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          @foreach ($errors->all() as $error)
          <span>{{ $error }}</span>
          @break
          @endforeach
        </div>
        @endif

        <form class="contactform" action="admin/edit/{{ $user->id }}" method="post">
          @csrf                          
          <div class="aa-single-field">   
            <label for="ten">Tên <span class="required">*</span></label>
            <input class="form-control py-4" type="text" aria-required="true" value=" {{ $user->ten }}" name="ten" placeholder="Nhập Họ Tên">
          </div>
          <div class="aa-single-field">
            <label for="email">Email <span class="required">*</span></label>
            <input class="form-control py-4" type="email"  aria-required="true" value=" {{ $user->email }}" name="email" readonly="" placeholder="email">
          </div>

          <div class="aa-single-field">
            <input type="checkbox" name="changePassword" id="changePassword">
            <label for="password">Đổi mật khẩu <span class="required">*</span></label>
            <input class="form-control py-4 password" type="password" name="password" value="" disabled="" placeholder="Nhập mật khẩu"> 
          </div>
          <div class="aa-single-field">
            <label for="confirm-password">Nhập lại mật khẩu <span class="required">*</span></label>
            <input class="form-control py-4 password" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" disabled="" placeholder="Nhập lại mật khẩu"> 
          </div>
          <div class="form-group">
            <label for="permission">Quyền</label>
            <select name="quyen" id="" class="form-control">
              <option value="NGUOI_DUNG" {{ $user->quyen === "NGUOI_DUNG" ? "selected" : "" }}>Người dùng</option>
              <option value="QUAN_TRI" {{ $user->quyen === "QUAN_TRI" ? "selected" : "" }}>Quản trị</option>   
            </select>
          </div>

          <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 ">
            <button type="reset" class="btn btn-secondary" > Hủy bỏ</button>
            <input type="submit" value="Sửa" class="btn btn-danger text-white">                 
          </div>
        </form>

      </div>
    </div>
  </div>
</main>
@endsection

@section('script')
<script >
  $(document).ready(function(){
    $('#changePassword').change(function(){
      if($(this).is(':checked'))
      {
        $(".password").removeAttr('disabled');
      }
      else
      {
        $(".password").attr('disabled','');
      }
    })
  });
</script>
@endsection