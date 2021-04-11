@extends('user.layout.index')

@section('content')
  @include('user.layout.search')

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img  src="user/img/Untitled-1.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>Về Chúng Tôi</h2>
                    <span></span>
                  </div>
                  <p>Mục đích tạo ra cho bạn một kênh rao vặt trung gian, kết nối người mua với người bán lại với nhau bằng những giao dịch cực kỳ đơn giản, tiện lợi, nhanh chóng, an toàn, mang đến hiệu quả bất ngờ. Hàng ngàn món hàng từ Nhà cửa, Xe cộ, Đồ điện tử, Vật dụng cá nhân,... được đăng tin, rao bán, chia sẽ miễn phí cho những người cần quyên góp từ thiện, và những người có hoàn cảnh khó khăn.</p>                  
                  <p>Với …,  bạn có thể dễ dàng mua bán, trao đổi bất cứ một loại mặt hàng nào, với nhiều lĩnh vực:</p>
                  <ul>
                    <li>Đồ dùng cá nhân: quần áo, giày dép, túi xách, đồng hồ... đa phong cách, hợp thời trang.</li>
                    <li>Đồ điện tử: điện thoại di động, máy tính bảng, laptop, tivi, loa, amply...; đồ điện gia dụng: máy giặt, tủ lạnh, máy lạnh... với rất nhiều nhãn hiệu, kích thước khác nhau.</li>
                    <li>Vật nuôi, thú cưng đa chủng loại: gà, chó, chim, mèo, cá, hamster giá cực tốt.</li>                    
                    <li>Và còn rất nhiều mặt hàng khác nữa đã và đang được rao bán tại Chợ Tốt.</li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Sản Phẩm Nổi Bật</h2>
          <span></span>
          <p>Những sản phẩm nổi bật được ưu thích nhất từ khách hàng</p>         
        </div>
        <div class="aa-latest-properties-content">
        <div class="row">
            @foreach ($sanPhamNoiBat as $spNoiBat)
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="User/img/item/{{$spNoiBat->hinhanh}}" alt="img">
                </a>
      
                  @if ($spNoiBat->trangthai === 'Chưa Bán')
                      <div class="aa-tag for-sale">
                        {{ $spNoiBat->trangthai }}
                      </div>
                  @elseif ($spNoiBat->trangthai === 'Đang Bán')
                      <div class="aa-tag for-rent">
                        {{ $spNoiBat->trangthai }}
                      </div>
                  @else
                     <div class="aa-tag sold-out">
                        {{ $spNoiBat->trangthai }}
                      </div>
                  @endif
           
                <div class="aa-properties-item-content">
                  <div class="aa-properties-about">
                    <h3><a href="#">{{ \Illuminate\Support\Str::limit($spNoiBat->ten, 25, '...') }}</a></h3>
                    <p>{{ \Illuminate\Support\Str::limit($spNoiBat->mota, 39, '...') }}</p>                   
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      {{ number_format($spNoiBat->gia) }}₫
                    </span>
                    <a href="#" class="aa-secondary-btn">{{ $spNoiBat->sdt}}</a>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Cam Kết</h2>
              <span></span>
              <p>Chiasedocu.com sẽ trở thành một nơi để người mua và người bán kết nối nhanh chóng và thuận tiện- một thị trường mua bán sôi động.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Sản Phẩm</a></h4>
                      <p>Sản phẩm đúng mẫu mã, mang đến cho quý khách những sản phẩm chất lượng tốt nhất.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Chất Lượng</a></h4>
                      <p>Chất lượng hàng hóa đảm bảo tuyệt đối, nói không với những đồ dùng kém chất lượng.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Uy Tín</a></h4>
                      <p>Với những sản phẩm và dịch vụ chất lượng uy tín đối với khách hàng.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Giá Cả</a></h4>
                      <p>Mua bán đồ cũ với giá cả tốt nhất thị trường.</p>
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
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <!-- <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
  <section id="aa-agents">
    <div class="container">
      <div class="row">
      
        <div class="col-md-12">
        
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Sản Phẩm Mới</h2>
              <span></span>
              <p>Những sản phẩm mới nhất được cập nhật</p>
            </div>
            <!-- agents content -->
            <div class="aa-agents-content">
              <ul class="aa-agents-slider">
              @foreach ($sanPhamNgauNhien as $spNgauNhien)
                <li>               
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="user/img/agents/{{$spNgauNhien->hinhanh}}" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#">{{ $spNgauNhien->nguoiDung->ten}}</a></h4>
                      <span>{{ number_format($spNgauNhien->gia) }}₫</span>
                      <div class="aa-agent-social">
                        <a href="#" style="border: none;"> {{ $spNgauNhien->sdt}} </a>
                      </div>
                    </div>
                  </div>         
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>What Client Say</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="user/img/testimonial-1.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="user/img/testimonial-3.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="user/img/testimonial-2.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
  <!-- <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-4.png" alt="brand image">
                </div>
              </li>
               <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="user/img/client-brand-4.png" alt="brand image">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Client brand -->

 
  <!-- / Latest blog -->

@endsection