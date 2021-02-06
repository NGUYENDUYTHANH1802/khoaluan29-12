@extends('user.layout.index')

@section('content')
<!-- Start Properties  -->
<section id="aa-properties">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="aa-properties-content">
                    <!-- start properties content head -->
                    <div class="aa-properties-content-head">
                        <div class="aa-properties-content-head-right">
                            <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                            <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <!-- Start properties content body -->
                    <div class="aa-properties-content-body">
                        <ul class="aa-properties-nav">
                            @foreach ( $productsByIDCategory as $productID)
                            <li>
                                <article class="aa-properties-item">
                                    <a class="aa-properties-item-img" href="#">
                                        <img alt="img" src="user/img/item/{{ $productID->hinhanh }}">
                                    </a>

                                    @if ($productID->trangthai === 'Chưa Bán')
                                    <div class="aa-tag for-sale">
                                        {{ $productID->trangthai }}
                                    </div>
                                    @elseif ( $productID->trangthai === 'Đang Bán')
                                    <div class="aa-tag for-rent">
                                        {{ $productID->trangthai }}
                                    </div>
                                    @else
                                    <div class="aa-tag sold-out">
                                        {{ $productID->trangthai }}
                                    </div>
                                    @endif

                                    <div class="aa-properties-item-content">

                                        <div class="aa-properties-about">
                                            <h3><a href="#">{{ \Illuminate\Support\Str::limit($productID->ten, 25, '...') }}</a></h3>
                                            <p>{{ \Illuminate\Support\Str::limit($productID->mota, 39, '...') }}</p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <span class="aa-price">
                                                {{ number_format($productID->gia) }}₫
                                            </span>
                                            <a class="aa-secondary-btn" href="#">{{ $productID->sdt}}</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Start properties content bottom -->
                    <div class="aa-properties-content-bottom">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                 
                </div>
            </div>
            <!-- Start properties sidebar -->
            <div class="col-md-4">
                <aside class="aa-properties-sidebar">
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3>Tìm Kiếm</h3>
                        <form action="">
                            <div class="aa-single-advance-search">
                                <select id="" name="">
                                    @foreach ($types as $type)
                                    <option selected="" value="{{ $type->ten }}">{{ $type->ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="aa-single-advance-search">
                                <input type="submit" value="Search" class="aa-search-btn">
                            </div>
                        </form>
                    </div>
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3>Phổ Biến</h3>
                        @foreach ($sanPhamPhoBien as $spPhoBien)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="User/img/item/{{ $spPhoBien->hinhanh }}" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $spPhoBien->ten }}</a></h4>
                                <p>{{ $spPhoBien->mota }}</p>
                                <span>  {{ number_format($spPhoBien->gia) }}₫</span>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/item/1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div> -->
                        <!-- <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/item/1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div> -->
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- / Properties  -->

@endsection