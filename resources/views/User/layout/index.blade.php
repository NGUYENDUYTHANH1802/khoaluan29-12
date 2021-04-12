<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang chủ | @yield('title')</title>
  <base href="{{asset('')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="user/img/favicon.ico" type="image/x-icon">

  <!-- Font awesome -->
  <link href="user/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="user/css/bootstrap.css" rel="stylesheet">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="user/css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="user/css/nouislider.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="user/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="user/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="user/css/style.css" rel="stylesheet">


  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  @yield('css')

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="user/js/jquery.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="aa-price-range">
  @include('user.layout.header')

  @yield('content')

  @include('user.layout.footer')

  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="user/js/bootstrap.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="user/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="user/js/nouislider.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="user/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="user/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="user/js/custom.js"></script>

  <script src='js/tinymce/tinymce.js'></script>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=462133355110539&autoLogAppEvents=1" nonce="KzORJH1D"></script>

  @yield('script')

</body>

</html>