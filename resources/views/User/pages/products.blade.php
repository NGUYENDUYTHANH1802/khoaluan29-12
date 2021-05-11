@extends('user.layout.index')

@section('title')
    Bài Viết
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
                      <article class="aa-blog-single aa-properties-item">
                        <figure class="aa-blog-img">
                          <a href="EditUserProduct.html/{{ $product->id }}"><img width="360px" height="214px" alt="img" src="user/img/img-detail/{{ $product->hinhanh }}"></a>
                         
                            @if ($product->trangthai === 'Chưa Bán')
                            <div class="aa-tag for-sale">
                              {{ $product->trangthai }}
                            </div>
                            @elseif ( $product->trangthai === 'Đang Bán')
                            <div class="aa-tag for-rent">
                              {{ $product->trangthai }}
                            </div>
                            @else
                            <div class="aa-tag sold-out">
                              {{ $product->trangthai }}
                            </div>
                            @endif
                         
                        </figure>
                        <div class="aa-blog-single-content">
                           <h3><a href="detail/{{ $product->id }}">{{ \Illuminate\Support\Str::limit($product->ten, 25, '...') }}</a></h3> 
                          <p>{{ \Illuminate\Support\Str::limit($product->mota, 39, '...') }}</p>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="javascript::;"><i class="fa fa-user"></i> {{ $product->nguoiDung->ten }}</a>
                            <a class="aa-blog-comments" href="javascript::;">{{ $product->sdt }}</a>
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