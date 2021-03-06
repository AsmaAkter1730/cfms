<!doctype html>
<html lang="en">

<head>
    <title>cattle farm management system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-20/css/A.style.css.pagespeed.cf.eQk9-CoeFP.css">
</head>

<body class="img js-fullheight" style="background-image:url({{url('images/funny_cow.jpg')}})">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0" style="box-sizing: border-box; border: 2px solid #64f25a;">
                        <h3 class="mb-4 text-center">Welcome</h3>

                        @if(session()->has('message'))
                        <span class="alert alert-danger">{{session()->get('message')}}</span>
                        @endif

                        <form action="{{route('admin.login.post')}}" method="post" class="signin-form">
                            @csrf

                            <div class="form-group">
                                <input required type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input required id="password-field" name="password" type="password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://preview.colorlib.com/theme/bootstrap/login-form-20/js/jquery.min.js"></script>
    <script src="https://preview.colorlib.com/theme/bootstrap/login-form-20/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js">
    </script>
    <script>
        eval(mod_pagespeed_T07FyiNNgg);
    </script>
    <script>
        eval(mod_pagespeed_zB8NXha7lA);
    </script>
    <script>
        eval(mod_pagespeed_xfgCyuItiV);
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"687c254339654cbf","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'>
    </script>
</body>

</html>