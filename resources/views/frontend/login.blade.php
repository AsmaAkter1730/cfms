
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
<span class="login100-form-title">
Login From
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Please enter password">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
</div>

<div class="text-right p-t-13 p-b-23">
<span class="txt1">

<div>
     <label for="inputEmail4" class="form-label">Select type</label>
         <select class="form-control" name="Select type" placeholder="Select type" >
                 <option value="Admin">Admin</option>
                 <option value="Staff">Staff</option>
		</select>
             <span class="focus-input100"></span>
</div>


Forgot
</span>
<a href="#" class="txt2">
Username / Password?
</a>
</div>
       <div class="container-login100-form-btn">
	   <li><a href="{{route('dashboards')}}" data-hover="dashboards">  
	   <button type="button" class="btn btn-outline-success">Sign In</button></a></li> 
        </div>
<div class="flex-col-c p-t-170 p-b-40">
<span class="txt1 p-b-9">
Don’t have an account?
</span>
<a href="#" class="txt3">
Sign up now
</a>
</div>
</form>
</div>
</div>
</div>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/countdowntime/countdowntime.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6784e81dfc3df44c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>
</html>
