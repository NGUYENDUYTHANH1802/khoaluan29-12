<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Đăng Ký</title>
    <base href="{{asset('')}}">
<!-- User/img/Anh01.jpg -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    
    <!-- Font awesome -->
    <link href="User/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="User/css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="User/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="User/css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="User/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="User/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="User/css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <style type="text/css">
    #aa-signin{
        background-image: url(User/img/Anh01.jpg);
    }
</style>
  <body>   
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12" >

          <div class="aa-signin-area">
            <div class="aa-signin-form">
               @if ($errors->any())
                  <div class="alert alert-danger alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      @foreach ($errors->all() as $error)
                          <span>{{ $error }}</span>
                         @break
                      @endforeach
                  </div>
              @endif
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="home">Đăng Ký Tài Khoản Khoản</a>
              </div>
              <form class="contactform" action="account/registration.html" method="post">
                @csrf                          
                <div class="aa-single-field">
                  <label for="ten">Tên <span class="required">*</span></label>
                  <input type="text" aria-required="true" value="{{ old('ten') }}" name="ten">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email"  aria-required="true" value="{{ old('email') }}" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Mật Khẩu <span class="required">*</span></label>
                  <input type="password" name="password" value="{{ old('password') }}"> 
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Xác Nhận Mật Khẩu <span class="required">*</span></label>
                  <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"> 
                </div>
              
                <div class="aa-single-submit">
                <input type="submit" value="Đăng Ký" class="aa-browse-btn">                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 


  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="User/js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="User/js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="User/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="User/js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="User/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="User/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="User/js/custom.js"></script> 
  
  </body>
</html>