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
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="aa-blog-single aa-blog-details">
                                            <figure class="aa-blog-img">
                                                <a href="#"><img alt="img" src="user/img/img-detail/{{ $detail->hinhanh }}"></a>
                                                <span class="aa-date-tag">
                                                    @if ($detail->trangthai === 'Chưa Bán')
                                                    <div class="aa-tag for-sale">
                                                        {{ $detail->trangthai }}
                                                    </div>
                                                    @elseif ( $detail->trangthai === 'Đang Bán')
                                                    <div class="aa-tag for-rent">
                                                        {{ $detail->trangthai }}
                                                    </div>
                                                    @else
                                                    <div class="aa-tag sold-out">
                                                        {{ $detail->trangthai }}
                                                    </div>
                                                    @endif
                                                </span>
                                            </figure>
                                            <div class="aa-blog-single-content">
                                                <h2>{{ $detail->ten }}</h2>
                                                <div class="aa-blog-single-bottom row">
                                                    <a class="aa-blog-author" href="javascript::;"><i class="fa fa-user"></i> {{ $detail->nguoiDung->ten }}</a>
                                                    <a class="aa-blog-author" href="javascript::;"><i class=""></i> {{ $detail->sdt }}</a>
                                                    <a class="aa-blog-comments" href="javascript::;"><i class=""></i>{{ number_format($detail->gia) }}₫</a>
                                                </div>
                                            </div>
                                            {!! $detail->noidung !!}
                                        </article>
                                    </div>
                                    <!-- Post tags -->
                                    <div class="col-md-12">
                                        <div class="aa-blog-post-tag">
                                            <ul>
                                                <li>Thể loại khác:</li>
                                                @foreach ($theLoaiKhac as $theLoai)
                                                    <li><a href="type?idType={{ $theLoai->id }}">{{ $theLoai->ten }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Social Share -->
                                    <div class="col-md-12">
                                        <div class="aa-properties-social">
                                            <ul>
                                                <li>Chia sẽ</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Related blog post -->
                                    <div class="col-md-12">
                                        <div class="aa-blog-related-post">
                                            <div class="aa-title">
                                                <h2>Sản phẩm tương tự</h2>
                                                <span></span>
                                            </div>
                                            <div class="aa-blog-related-post-area">
                                                <div class="row">
                                                    @foreach ($sanPhamCungTheLoai as $dt)
                                                    <div class="col-md-6 col-sm-6">
                                                        <article class="aa-blog-single">
                                                            <figure class="aa-blog-img">
                                                                <a href="#"><img src="User/img/item/{{ $dt->hinhanh }}" alt="img"></a>
                                                                <span class="aa-date-tag">15 April, 16</span>
                                                            </figure>
                                                            <div class="aa-blog-single-content">
                                                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                                                <div class="aa-blog-single-bottom">
                                                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- comment threats -->
                                    <div class="col-md-12">
                                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#doanTest" data-width="600" data-numposts="5"></div>
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