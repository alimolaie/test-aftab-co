<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>پنل مدیریت</title>
    <!--font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-design-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe7-icon.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="typewriter">
        <h1>در حال بارگیری پنل مدیریت...</h1>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right">
            <div class="main-header-left text-center">
                <div class="logo-wrapper"><a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
                </div>
            </div>
            <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar">               </i></div>
            <div class="nav-right col pull-right right-menu">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form" action="#" method="get">
                            <div class="form-group">
                                <div class="Typeahead Typeahead--twitterUsers">
                                    <div class="u-posRelative">
                                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="جستجوی محصول مورد نظر...">
                                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">درحال بارگزاری...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                    </div>
                                    <div class="Typeahead-menu"></div>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="assets/images/dashboard/bookmark.png" alt="">
                        <div class="onhover-show-div bookmark-flip">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="front">
                                        <ul class="droplet-dropdown bookmark-dropdown">
                                            <li class="gradient-primary text-center">
                                                <h5 class="f-w-700">نشانک ها</h5><span>آیکون نشانک ها بصورت شبکه ای</span>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="activity"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="users"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="settings"></i></div>
                                                </div>
                                            </li>
                                            <li class="text-center">
                                                <button class="flip-btn" id="flip-btn">افزودن نشانک جدید</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="back">
                                        <ul>
                                            <li>
                                                <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                                    <input type="text" placeholder="جستجو...">
                                                </div>
                                            </li>
                                            <li>
                                                <button class="d-block flip-back" id="flip-back">برگشت</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="onhover-dropdown"><img class="img-fluid img-shadow-secondary" src="assets/images/dashboard/like.png" alt="">
                        <ul class="onhover-show-div droplet-dropdown">
                            <li class="gradient-primary text-center">
                                <h5 class="f-w-700">داشبورد شبکه ای</h5><span>شبکه کشویی داخل</span>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="file-text"></i><span class="d-block">محتوا</span></div>
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="activity"></i><span class="d-block">فعالیت</span></div>
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="users"></i><span class="d-block">مخاطب</span></div>
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="clipboard"></i><span class="d-block">گزارش ها</span></div>
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="anchor"></i><span class="d-block">اتوماسیون</span></div>
                                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="settings"></i><span class="d-block">تنظیمات</span></div>
                                </div>
                            </li>
                            <li class="text-center">
                                <button class="btn btn-primary btn-air-primary">دنبال کنید</button>
                            </li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="assets/images/dashboard/notification.png" alt="">
                        <ul class="onhover-show-div notification-dropdown">
                            <li class="gradient-primary">
                                <h5 class="f-w-700">اعلان ها</h5><span>شما 6 پیام خوانده نشده دارید</span>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                                    <div class="media-body">
                                        <h6> شخصی پستهای شما را لایک کرد </h6>
                                        <p class="mb-0"> 2 ساعت قبل </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-0">
                                <div class="media">
                                    <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i></div>
                                    <div class="media-body">
                                        <h6>3 نظر جدید</h6>
                                        <p class="mb-0"> 1 ساعت قبل </p>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-light txt-dark"><a href="#"> همه </a> اعلان ها </li>
                        </ul>
                    </li>
                    <li><a class="right_side_toggle" href="#"><img class="img-fluid img-shadow-success" src="assets/images/dashboard/chat.png" alt=""></a></li>
                    <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="assets/images/dashboard/user.png" alt=""></span>
                        <ul class="onhover-show-div profile-dropdown">
                            <li class="gradient-primary">
                                <h5 class="f-w-600 mb-0">ایمان پاکروح</h5><span>طراح سایت</span>
                            </li>
                            <li><i data-feather="user"> </i>پروفایل</li>
                            <li><i data-feather="message-square"> </i>صندوق پستی</li>
                            <li><i data-feather="file-text"> </i>میز کار</li>
                            <li><i data-feather="settings"> </i>تنظیمات            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
            <script id="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName"></div>
                    </div>
                </div>
            </script>
            <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage"> جستجوی شما 0 نتیجه را پیدا کرد. این به احتمال زیاد به معنای داون بودن سرور است! </div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('admin.sidebar')
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold"> وضعیت مخاطبین </h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/1.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">ایمان پاکروح</div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/2.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">سوسن عباسی</div>
                                        <div class="status"> 28 دقیقه پیش </div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/8.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">آرزو زیبا</div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/4.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">سوسن محمدی</div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/5.jpg" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">سینا بهبهانی</div>
                                        <div class="status"> 2 دقیقه پیش</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/6.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">رضا حسنی</div>
                                        <div class="status"> 2 ساعت پیش</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-small user-image" src="./assets/images/user/7.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">آزاده امیری</div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 main-header">
                            <h2> <span> کتاب</span></h2>
                            <h6 class="mb-0">افزودن </h6>
                        </div>
                        <div class="col-lg-6 breadcrumb-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                                <li class="breadcrumb-item">پنل مدیریت</li>
                                <li class="breadcrumb-item">کتاب</li>
                                <li class="breadcrumb-item active">افزودن کتاب</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5>افزودن کتاب</h5>
                            </div>
                            {!! Form::open(array('route' => 'books.store','method'=>'POST','files' => true)) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">نام</label>
                                            <div class="col-sm-9">
                                                {!! Form::text('name', null, array('placeholder' => 'لطفا نام را وارد کنید','class' => 'form-control')) !!}
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">انتخاب ژانر</label>
                                            <div class="col-sm-9">
                                                {!! Form::select('genre',[""=>"ژانر را انتخاب کنید","1"=>"رمان","2"=>"درسی"], array('class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">جزئیات</label>
                                            <div class="col-sm-9">
                                                {!! Form::textarea('details',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">شابک</label>
                                            <div class="col-sm-9">
                                                {!! Form::text('isbn', null, array('placeholder' => 'لطفا شابک را وارد کنید','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                            <label class="col-sm-3 col-form-label">تصویر شاخص</label>
                                            <div class="col-sm-9">
                                                {!! Form::file('images', array('class' => 'form-control-file','multiple')); !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-sm-9 offset-sm-3">
                                    <button class="btn btn-pill btn-primary mr-5" style="right: 10px" type="submit"> ارسال </button>

                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>






                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">حق کپی رایت © 2021 پوکو ، کلیه حقوق محفوظ است</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">بومی شده با <i class="fa fa-heart"></i> توسط : <a href="https://www.rtl-theme.com/author/iman1300/">ایمان پاکروح </a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
<script src="{{ asset('js/app.js') }}"></script>
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
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
