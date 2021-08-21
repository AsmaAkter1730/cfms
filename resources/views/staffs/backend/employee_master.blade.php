
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
                   <link rel="icon" href="images/favicon.ico" type="image/ico" />
                    <title>Cattle farm Management System  </title>

          <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

           <link href="https://colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

           <link href="https://colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet">
           <meta name="robots" content="index, nofollow">
    </head>
         <body class="nav-md">
                    <div class="container body">
                        <div class="main_container">
                            <div class="col-md-3 left_col">
                                 <div class="left_col scroll-view">
                                     <div class="navbar nav_title" style="border: 0;">
                                         <a href="{{route('homepages')}}" class="site_title"><i class="fa fa-paw"></i> <span>Cattle Farm </span></a>
                                     </div>


                                      <br />

                  @include('staffs.backend.partials.sidebar')


                  <div class="top_nav">
                  <div class="nav_menu">
                       <div class="nav toggle">
                           <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                       </div>

                      @include('staffs.backend.partials.header')

                    
                  </div>
              </div>


                 <div class="right_col" role="main">

                 @yield('fixedpage')

                   <br />
                       <div class="row">
                          <div class="row"> </div>

                        </div>
</div>

<script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>

<script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>

<script src="https://colorlib.com/polygon/vendors/Chart.js/dist/Chart.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/gauge.js/dist/gauge.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/iCheck/icheck.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/skycons/skycons.js"></script>

<script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.js"></script>
<script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.pie.js"></script>
<script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.time.js"></script>
<script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.stack.js"></script>
<script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.resize.js"></script>

<script src="https://colorlib.com/polygon/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="https://colorlib.com/polygon/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="https://colorlib.com/polygon/vendors/flot.curvedlines/curvedLines.js"></script>

<script src="https://colorlib.com/polygon/vendors/DateJS/build/date.js"></script>

<script src="https://colorlib.com/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="https://colorlib.com/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="https://colorlib.com/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

<script src="https://colorlib.com/polygon/vendors/moment/min/moment.min.js"></script>
<script src="https://colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/polygon/build/js/custom.min.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"676db691cf92f444","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>
</html>
