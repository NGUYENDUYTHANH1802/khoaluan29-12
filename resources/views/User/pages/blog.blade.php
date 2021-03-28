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
                      <a href="createblog.html">
                        <button class="btn btn-primary" style="float: right; margin-bottom: 20px;">Tạo bài viết</button>
                      </a>
                    </div>
                  </div>
                  @endif

                  <div class="row">
                    @foreach ( $blog as $blog)
                    <div class="col-md-4 col-sm-4">
                      <article class="aa-blog-single">
                        <figure class="aa-blog-img">
                          <a href="#"><img alt="img" src="user/img/{{ $blog->hinhanh }}"></a>
                          <span class="aa-date-tag">{{ date("d/m/Y", strtotime($blog->created_at ) )}}</span>
                        </figure>
                        <div class="aa-blog-single-content">
                          <h3><a href="blogdetail.html">{{ $blog->tieude }}</a></h3>
                          <p>{{ $blog->mota }}</p>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> {{ $blog->nguoiDung->ten }}</a>
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
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a aria-label="Previous" href="#">
                                <span aria-hidden="true">«</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a aria-label="Next" href="#">
                                <span aria-hidden="true">»</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
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