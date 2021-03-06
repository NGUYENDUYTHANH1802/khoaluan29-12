<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <base href="{{asset('')}}">
        <title>@yield('title')</title>
        <link href="admin/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        @yield('css')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.layout.header1')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            @include('admin.layout.menu')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <main>
                            <div class="container-fluid mt-2">
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    @foreach ($errors->all() as $error)
                                        <span>{{ $error }}</span>
                                        @break
                                    @endforeach
                                </div>
                            @elseif (Session::has('msgOK'))
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <span>{{ Session::get('msgOK') }}</span>
                                </div>
                            @elseif (Session::has('msgINF'))
                                <div class="alert alert-info alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <span>{{ Session::get('msgINF') }}</span>
                                </div>
                            @elseif (Session::has('msgERR'))
                                <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <span>{{ Session::get('msgERR') }}</span>
                                </div>
                            @endif
                            </div>
                        </main>
                        @yield('content')
                    </div>
                </main>
              
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="admin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/assets/demo/datatables-demo.js"></script>


         <script src='js/tinymce/tinymce.js'></script>
        @yield('script')
    </body>
</html>
