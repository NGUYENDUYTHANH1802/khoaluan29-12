@extends('user.layout.index')

@section('content')
@include('user.layout.search')
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
                            @foreach ($productsByIDCategory as $productID)
                            <li>
                                <article class="aa-properties-item">
                                    <a class="aa-properties-item-img" href="detail/{{ $productID->id }}">
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
                                            <h3><a href="detail/{{ $productID->id }}">{{ \Illuminate\Support\Str::limit($productID->ten, 25, '...') }}</a></h3>
                                            <p>{{ \Illuminate\Support\Str::limit($productID->mota, 39, '...') }}</p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <span class="aa-price">
                                                {{ number_format($productID->gia) }}₫
                                            </span>
                                            <a class="aa-secondary-btn" href="detail/{{ $productID->id }}">{{ $productID->sdt}}</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Start properties content bottom -->
                    <div class="aa-properties-content-bottom">
                        {{ $productsByIDCategory->links() }}
                    </div>
                 
                </div>
            </div>
            <!-- Start properties sidebar -->
            <div class="col-md-4">
                <aside class="aa-properties-sidebar">
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3>Tìm Kiếm</h3>
                        <form action="type" method="GET">
                            <div class="aa-single-advance-search">
                                <select name="idType">
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->ten }}</option>
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
                                <a  href="detail/{{ $spPhoBien->id }}">
                                    <img class="media-object" src="User/img/item/{{ $spPhoBien->hinhanh }}" alt="img">
                                </a>
                            </div>  
                            <div class="media-body">
                                <h4 class="media-heading"><a href="detail/{{ $spPhoBien->id }}">{{ $spPhoBien->ten }}</a></h4>
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