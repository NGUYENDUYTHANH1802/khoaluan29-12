@extends('admin.layout.index')

@section('title')
Sửa Bài Viết
@endsection

@section('content')
<main >
	<div class="container-fluid">
		<h1 class="mt-4">Sửa Bài Viết</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
			<li class="breadcrumb-item active">Sửa Bài Viết</li>
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

				<form action="admin/createblog/{{ $user->id }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="small mb-1" for="tieude">Tiêu đề </label>
						<input class="form-control py-4" id="tieude" name="tieude" type="text" placeholder="Nhập tiêu đề" required="" value=" {{ $user->tieude }}" />
					</div>
					<div class="form-group">
						<label class="small mb-1" for="mota">Mô tả </label>
						<input class="form-control py-4" id="mota" type="text" name="mota" placeholder="Nhập mô tả" required=""  value=" {{ $user->mota }}"/>
					</div>
					<div class="form-group">
                        <label for="hinhanh">Hình ảnh</label> <br>
                        <img width="100px" src="user/img/blog/{{ $user->hinhanh }}"> <br>
                        <input id="file-upload" type="file" name="hinhanh" required="" /> 
                        <div id="preview">
                       <!--  <img v-if="url" :src="url" style="display: block; margin-left: auto; margin-right: auto; max-width: 350px" /> -->
                          <img src="#" id="image-tag" style="display: block; margin-left: auto; margin-right: auto; max-width: 350px;" /> 
                        </div>                                        
                      </div>
                      <textarea class="mb-2" cols="30" rows="50" id="blog_content" name="noidung" required="" >
                        value=" {{ $user->noidung }}"
                      </textarea>
                      <div class="col-md-12 col-sm-12 container-button">
                       <!--  <button type="submit" class="btn btn-success">Lưu</button> -->
                       <input type="submit" value="Sửa" class="btn btn-danger text-white">   
                        <button type="reset" class="btn mt-2">Nhập lại</button>
                      </div>
				</form>
			</div>
		</div>
	</div>
</main>

<script>
  $(document).ready(function() {
    if( tinymce.editors.length > 0 ){
      for( i = 0; i < tinymce.editors.length; i++ ){
        tinymce.editors[ i ].remove();
      }
    }
    tinymce.init({
      selector: "#blog_content",
      theme: "modern",
      paste_data_images: true,
      plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      toolbar2: "print preview media | forecolor backcolor emoticons",
      image_advtab: true,
      file_picker_callback: function(callback, value, meta) {
        if (meta.filetype == 'image') {
          $('#upload').trigger('click');
          $('#upload').on('change', function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
              callback(e.target.result, {
                alt: ''
              });
            };
            reader.readAsDataURL(file);
          });
        }
      },
      templates: [{
        title: 'Test template 1',
        content: 'Test 1'
      }, {
        title: 'Test template 2',
        content: 'Test 2'
      }]
    });
  });

  	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#image-tag').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#file-upload").change(function(){
	    readURL(this);
	});
</script>
@endsection