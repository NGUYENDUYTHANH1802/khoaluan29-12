<!-- Pre Loader -->

<div id="aa-preloader-area">
  <div class="pulse"></div>
</div>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-header-area">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="aa-header-left">
                <div class="aa-telephone-no">
                  <span class="fa fa-phone"></span>
                  0977485234
                </div>
                <div class="aa-email hidden-xs">
                  <span class="fa fa-envelope-o"></span> Nguyenduythanh77777@gmail.com
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              @if(Session::has('loginInfo'))
              <div class="aa-header-right">
                <a href="register.html" class="aa-register">{{ Session::get('loginInfo')->ten }}</a>
                <a href="account/singout.html" class="aa-login">Đăng xuất</a>
              </div>
              @else
              <div class="aa-header-right">
                <a href="register.html" class="aa-register">Đăng ký</a>
                <a href="account/signin.html" class="aa-login">Đăng nhập</a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="aa-menu-area">
  <nav class="navbar navbar-default main-navbar" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->
        <!-- Text based logo -->
        <a class="navbar-brand aa-logo" href="index.html"> Chia Sẻ <span>Đồ Cũ</span></a>
        <!-- Image based logo -->
        <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
          <li class="active"><a href="index.html">Trang Chủ</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">Chủng Loại <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="category/1">Đồ Gia Dụng</a></li>
              <li><a href="category/2">Đồ Điện</a></li>
              <li><a href="category/3">Đồ Miễn Phí</a></li>
              <li><a href="category/4">Đồ Văn Phòng</a></li>
            </ul>
          </li>
          <li><a href="gallery.html">Loại Sản Phẩm</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="blog-archive.html">BLOG</a></li>
              <li><a href="blog-single.html">BLOG DETAILS</a></li>
            </ul>
          </li>
          <li><a href="contact.html">CONTACT</a></li>
          <li><a href="404.html">404 PAGE</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
</section>
<!-- End menu section -->

<!-- Start slider  -->
<section id="aa-slider">
  <div class="aa-slider-area">
    <!-- Top slider -->
    <div class="aa-top-slider">
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/Anh01.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/slider/2.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/slider/1.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/slider/5.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/slider/4.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="user/img/slider/6.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Duplex</span>
          <h2 class="aa-top-slider-title">1560 Square Feet</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">$460,000</p>
          <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
    </div>
  </div>
</section>
<!-- End slider  -->

<!-- Advance Search -->
<section id="aa-advance-search">
  <div class="container">
    <div class="aa-advance-search-area">
      <div class="form">
        <div class="aa-advance-search-top">
          <div class="row">
            <div class="col-md-4">
              <div class="aa-single-advance-search">
                <input type="text" placeholder="Type Your Location">
              </div>
            </div>
            <div class="col-md-2">
              <div class="aa-single-advance-search">
                <select>
                  <option value="0" selected>Category</option>
                  <option value="1">Flat</option>
                  <option value="2">Land</option>
                  <option value="3">Plot</option>
                  <option value="4">Commercial</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="aa-single-advance-search">
                <select>
                  <option value="0" selected>Type</option>
                  <option value="1">Flat</option>
                  <option value="2">Land</option>
                  <option value="3">Plot</option>
                  <option value="4">Commercial</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="aa-single-advance-search">
                <select>
                  <option value="0" selected>Type</option>
                  <option value="1">Flat</option>
                  <option value="2">Land</option>
                  <option value="3">Plot</option>
                  <option value="4">Commercial</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="aa-single-advance-search">
                <input class="aa-search-btn" type="submit" value="Search">
              </div>
            </div>
          </div>
        </div>
        <div class="aa-advance-search-bottom">
          <div class="row">
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Advance Search -->