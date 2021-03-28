@extends('user.layout.index')


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
                    <form action="createblog.html" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="tieude">Tiêu đề</label>
                        <input type="text" class="form-control" id="tieude" name="tieude" required=""/>
                      </div>
                      <div class="form-group">
                        <label for="mota">Mô tả</label>
                        <input type="text" class="form-control" id="mota" name="mota" required="" />
                      </div>
                      <div class="form-group">
                        <label for="hinhanh">Hình ảnh</label>
                        <input id="file-upload" type="file" name="hinhanh" required="" />
                        <div id="preview">
                          <img src="#" id="image-tag" style="display: block; margin-left: auto; margin-right: auto; max-width: 350px;" /> 

                        </div>                                        
                      </div>
                      <textarea class="mb-2" cols="30" rows="50" id="blog_content" name="noidung" required="">

                      </textarea>
                      <div class="col-md-12 col-sm-12 container-button">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="reset" class="btn mt-2">Nhập lại</button>
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
</script>
@endsection