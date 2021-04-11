@extends('user.layout.index')

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
                  @if(Session::has('loginInfo'))
                  <div class="row">
                    <div class="col-md-12">
                      <a href="createProducts.html">
                        <button class="btn btn-primary" style="float: right; margin-bottom: 20px;">Đăng sản phẩm</button>
                      </a>
                    </div>
                  </div>
                  @endif

                  <div class="row">
                    @foreach ( $products as $product)
                    <div class="col-md-4 col-sm-4">
                      <article class="aa-blog-single">
                        <figure class="aa-blog-img">
                          <a href="blogdetail.html/{{ $product->id }}"><img alt="img" src="User/img/item/{{ $product->hinhanh }}"></a>
                          <span class="aa-date-tag">{{ date("d/m/Y", strtotime($product->created_at ) )}}</span>
                        </figure>
                        <div class="aa-blog-single-content">
                          <h3><a href="blogdetail.html">{{ $product->tieude }}</a></h3>
                          <p>{{ $product->mota }}</p>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> {{ $product->nguoiDung->ten }}</a>
                            <a class="aa-blog-comments" href="#"><i class="fa fa-comment-o"></i>6</a>
                          </div>
                        </div>                   
                      </article>
                    </div>
                     @endforeach
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-properties-content-bottom">
                        {{ $products->links() }}
                      </div>
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
@endsection