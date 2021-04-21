@extends('user.layout.index')

@section('title')
    Sản Phẩm
@endsection

@section('content')
<section id="aa-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-blog-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-blog-content">
                                <div class="row">
                                    @foreach ($products as $pd)
                                    <div class="col-md-4 col-sm-4">
                                        <article class="aa-blog-single">
                                            <figure class="aa-blog-img">
                                                <a href="detail/{{ $pd->id }}"><img width="360px" height="214px" alt="img" src="user/img/item/{{ $pd->hinhanh }}"></a>
                                                <span class="aa-date-tag">
                                                    @if ($pd->trangthai === 'Chưa Bán')
                                                    <div class="aa-tag for-sale">
                                                        {{ $pd->trangthai }}
                                                    </div>
                                                    @elseif ( $pd->trangthai === 'Đang Bán')
                                                    <div class="aa-tag for-rent">
                                                        {{ $pd->trangthai }}
                                                    </div>
                                                    @else
                                                    <div class="aa-tag sold-out">
                                                        {{ $pd->trangthai }}
                                                    </div>
                                                    @endif
                                                </span>
                                            </figure>
                                            <div class="aa-blog-single-content">
                                                <h3><a href="javascript::;">{{ \Illuminate\Support\Str::limit($pd->ten, 25, '...') }}</a></h3>
                                                <p>{{ \Illuminate\Support\Str::limit($pd->mota, 40, '...') }}</p>
                                                <div class="aa-blog-single-bottom">
                                                    <!-- <a class="aa-blog-author" href="#"><i class="fa fa-user"></i>{{ number_format($pd->gia) }}₫</a> -->
                                                    <span class="aa-blog-author" href="javascript::;">{{ number_format($pd->gia) }}₫</span>
                                                    <!-- <a class="aa-blog-comments" href="#"><i class="fa fa-comment-o"></i>6</a> -->
                                                    <a class="aa-blog-comments aa-secondary-btn" href="javascript::;">{{ $pd->sdt}}</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>

                               <!--  <div class="row">
                                    <div class="col-md-12">
                                        <div class="aa-properties-content-bottom">
                                            <nav>
                                                <ul class="pagination">
                                                    <li>
                                                        <a aria-label="Previous" href="javascript::;">
                                                            <span aria-hidden="true">«</span>
                                                        </a>
                                                    </li>
                                                   
                                                    <li class="active"><a href="javascript::;">1</a></li>
                                                    <li><a href="javascript::;">2</a></li>
                                                   
                                                    <li>
                                                        <a aria-label="Next" href="javascript::;">
                                                            <span aria-hidden="true">»</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection