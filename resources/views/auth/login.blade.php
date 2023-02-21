<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>ورود</title>
    <!--font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts/fonts.css') }}">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
  </head>
  <body main-theme-layout="rtl">
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>در حال بارگیری ...</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">
                  <div class="card-body p-0">
                    <div class="cont text-center">
                      <div>
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                          <h4>وارد شدن</h4>
                          <h6>نام کاربری و رمز عبور خود را وارد کنید</h6>
                          <div class="form-group">
                            <label class="col-form-label pt-0">ایمیل</label>
                            <input class="form-control" type="email" required  name="email" value="{{ old('email') }}" autofocus>
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">رمزعبور</label>
                            <input class="form-control" type="password" required name="password" required autocomplete="current-password">
                          </div>
                          <div class="checkbox p-0">
                            <input id="checkbox1" type="checkbox" name="remember">
                            <label for="checkbox1">مرا به خاطر بسپار</label>
                          </div>
                          <div class="form-group form-row mt-3 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">وارد شدن</button>
                          </div>

                        </form>
                      </div>
                      <div class="sub-cont">
                        <div class="img">
                          <div class="img__text m--up">
                            <h2>تازه وارد به اینجا؟</h2>
                            <p>ثبت نام کنید و تعداد زیادی از فرصت های جدید را کشف کنید!</p>
                          </div>
                          <div class="img__text m--in">
                            <h2>یکی از ما؟</h2>
                            <p>اگر قبلاً حساب کاربری دارید ، فقط وارد سیستم شوید.</p>
                          </div>
                          <div class="img__btn"><span class="m--up">ثبت نام</span><span class="m--in">ورود</span></div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- login page end-->
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/login.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
