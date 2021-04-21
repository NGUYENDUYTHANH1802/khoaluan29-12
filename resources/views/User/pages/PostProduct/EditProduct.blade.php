@extends('user.layout.index')

@section('title')
  Sửa sản phẩm
@endsection
@section('css')
<style>
  .container-button {
    margin-top: 10px;
    text-align: center;
  }
</style>
@endsection

@section('content')

<!-- Start Blog  -->
<section id="aa-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-blog-area">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-blog-content">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      @foreach ($errors->all() as $error)
                      <span>{{ $error }}</span>
                      @break
                      @endforeach
                    </div>
                    @endif
                    <form action="EditUserProduct.html/{{ $EditProduct->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="chungloai">Chủng loại</label>
                        <select name="id_chung_loai" class="form-control">
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}"> {{ $category->ten }}</option>
                            @endforeach
                         </select>
                      </div>


                      <div class="form-group">
                        <label for="loaisanpham">Loại sản phẩm</label>
                          <select name="id_loai_san_pham" class="form-control">
                            @foreach ($types as $type)
                              <option value="{{ $type['id'] }}">{{ $type['ten'] }}</option>
                            @endforeach
                         </select>
                      </div>

                      <div class="form-group">
                        <label for="permission">Trạng thái</label>
                        <select name="trangthai" id="" class="form-control">
                          
                          <option value="Chưa Bán" {{ $EditProduct->trangthai === "Chưa Bán" ? "selected" : "" }}>Chưa Bán</option> 
                          <option value="Đang Bán" {{ $EditProduct->trangthai === "Đang Bán" ? "selected" : "" }}>Đang bán</option>
                           <option value="Đã Bán" {{ $EditProduct->trangthai === "Đã Bán" ? "selected" : "" }}>Đã bán</option>   
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ten">Tiêu đề</label>
                        <input type="text" class="form-control" id="ten" name="ten" value="{{ \Illuminate\Support\Str::limit($EditProduct->ten, 25, '...') }}" aria-required="true"/>
                      </div>

                      <div class="form-group">
                        <label for="hinhanh">Hình ảnh</label>
                        <input  id="file-upload" type="file" name="hinhanh" value="{{ $EditProduct->hinhanh }}" aria-required="true" />
                        <div id="preview" >
                          <img width="360px" height="214px" src="user/img/img-detail/{{ $EditProduct->hinhanh }}" id="image-tag" style="display: block; margin-left: auto; margin-right: auto; max-width: 350px;" /> 
                        </div>                                        
                      </div>

                      <div class="form-group">
                        <label for="mota">Mô tả</label>
                        <input type="text" class="form-control" id="mota" name="mota" value="{{ \Illuminate\Support\Str::limit($EditProduct->mota, 39, '...') }}" aria-required="true" />
                      </div>

                      <div class="form-group">
                        <label for="gia">giá</label>
                        <input type="text" class="form-control" id="gia" name="gia" value="{{ $EditProduct->gia }}" aria-required="true" />
                      </div>
                      
                      <div class="form-group">
                        <label for="sdt">Số Điện Thoại</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $EditProduct->sdt }}" aria-required="true" />
                      </div>

                      <textarea class="mb-2" cols="30" rows="50" id="blog_content" name="noidung"  aria-required="true" >
                        {{ $EditProduct->noidung }}
                      </textarea>

                      <div class="col-md-12 col-sm-12 container-button">
                        <button type="submit" class="btn btn-success"> Sửa </a>  
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"><a class="text-white" href="deleteUserProduct/ {{ $EditProduct->id }}">Xóa</a> </button>
                      
                      </div>
                    </form>
          
                    <input name="image" type="file" id="upload" class="hidden">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Blog  -->

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

  $('select[name="id_chung_loai"]').change(function () {
   $.ajax({
        url: "{{ asset('ajax-types') }}",
        type:'POST',
        data: {_token : $("input[name='_token']").val(), id : $(this).val()},
        success: function(data) {
          $('select[name="id_loai_san_pham"]').empty();
          $.each( data, function( key, value ) {
              $('select[name="id_loai_san_pham"]').append('<option value="' + value.id + '">' + value.ten + '</option>');
          });
        }
    });
  });
</script>
@endsection