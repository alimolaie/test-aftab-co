@extends('admin.master')
@section('content')
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
@include('admin.header')
    <!-- Page Header Ends-->
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
                <h2>داشبورد<span> پیشفرض </span></h2>
                <h6 class="mb-0">پنل ادمین </h6>
              </div>
              <div class="col-lg-6 breadcrumb-right">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                  <li class="breadcrumb-item">داشبورد </li>
                  <li class="breadcrumb-item active"> پیشفرض </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 xl-100">
              <div class="row">
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                  <div class="card gradient-primary o-hidden">
                    <div class="card-body tag-card">
                      <div class="default-chart">
                        <div class="apex-widgets">
                          <div id="area-widget-chart"></div>
                        </div>
                        <div class="widgets-bottom">
                          <h5 class="f-w-700 mb-0"> فروش کل <span class="pull-right">70 / 100   </span></h5>
                        </div>
                      </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                  <div class="card gradient-secondary o-hidden">
                    <div class="card-body tag-card">
                      <div class="default-chart">
                        <div class="apex-widgets">
                          <div id="area-widget-chart-2"></div>
                        </div>
                        <div class="widgets-bottom">
                          <h5 class="f-w-700 mb-0"> بازدید کل <span class="pull-right">70 / 100   </span></h5>
                        </div>
                      </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                  <div class="card gradient-warning o-hidden">
                    <div class="card-body tag-card">
                      <div class="default-chart">
                        <div class="apex-widgets">
                          <div id="area-widget-chart-3"></div>
                        </div>
                        <div class="widgets-bottom">
                          <h5 class="f-w-700 mb-0"> کل سهام <span class="pull-right">70 / 100   </span></h5>
                        </div>
                      </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                  <div class="card gradient-info o-hidden">
                    <div class="card-body tag-card">
                      <div class="default-chart">
                        <div class="apex-widgets">
                          <div id="area-widget-chart-4"></div>
                        </div>
                        <div class="widgets-bottom">
                          <h5 class="f-w-700 mb-0"> مقدار کل <span class="pull-right">70 / 100   </span></h5>
                        </div>
                      </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 xl-100 box-col-12">
              <div class="card year-overview">
                <div class="card-header no-border d-flex">
                  <h5> نمای کلی سال </h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="header-right pull-right text-right">
                    <h5 class="mb-2">70 / 100</h5>
                    <h6 class="f-w-700 mb-0 default-text">مجموع 71,520,225 تومان</h6>
                  </div>
                </div>
                <div class="card-body row">
                  <div class="col-6 p-0 ct-10 default-chartist-container"></div>
                  <div class="col-6 p-0 ct-11 default-chartist-container"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 xl-100 box-col-12">
              <div class="card">
                <div class="card-header no-border">
                  <h5>فروش توسط کشورها</h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                      <li><i class="view-html fa fa-code font-primary"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                      <li><i class="icofont icofont-error close-card font-primary"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="radial-default">
                    <div id="circlechart"></div>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
&lt;div class="radial-default"&gt;
&lt;div id="circlechart"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 xl-50 box-col-12">
              <div class="card gradient-secondary o-hidden monthly-overview">
                <div class="card-header no-border bg-transparent">
                  <h5>بررسی اجمالی ماهانه</h5>
                  <h6 class="mb-0">آذر</h6><span class="pull-right right-badge"><span class="badge badge-pill">70 / 100</span></span>
                </div>
                <div class="card-body p-0">
                  <div class="text-bg"><span>0.7</span></div>
                  <div class="area-range-apex">
                    <div id="area-range"></div>
                  </div><span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 xl-50 box-col-6">
              <div class="card">
                <div class="card-header no-border">
                  <h5>محصول پرفروش</h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-warning"></i></li>
                      <li><i class="view-html fa fa-code font-warning"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-warning"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-warning"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-warning"></i></li>
                      <li><i class="icofont icofont-error close-card font-warning"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pb-0 pt-0">
                  <div class="music-layer">
                    <button class="btn btn-pill"> مشاهده بیشتر </button>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="music-layer"&gt;
&lt;button class="btn btn-pill"&gt;
View More&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 xl-100 box-col-6">
              <div class="card gradient-primary o-hidden monthly-overview yearly">
                <div class="card-header no-border bg-transparent">
                  <h5> مرور سالانه </h5>
                  <h6 class="mb-0"> دوشنبه </h6><span class="pull-right right-badge"><span class="badge badge-pill">50 / 100</span></span>
                </div>
                <div class="card-body p-0">
                  <div class="text-bg"><span>0.5</span></div>
                  <div class="area-range-apex">
                    <div id="area-range-1"></div>
                  </div><span class="overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"> </span></span></span>
                </div>
              </div>
            </div>
            <div class="col-xl-6 xl-100 box-col-12">
              <div class="card weather-bg">
                <div class="card-header no-border bg-transparent">
                  <h5> نمای کلی آب و هوا </h5>
                </div>
                <div class="card-body weather-bottom-bg p-0">
                  <div class="cloud"><img src="assets/images/cloud.png" alt=""></div>
                  <div class="cloud-rain"></div>
                  <div class="media weather-details"><span class="weather-title"><i class="fa fa-circle-o d-block text-right"></i><span>16</span></span>
                    <div class="media-body">
                      <h5>لندن</h5><span class="d-block">1 آذر 1381</span>
                      <h6 class="mb-0"> باد: 50 کیلومتر در ساعت </h6>
                    </div>
                  </div><img class="img-fluid" src="assets/images/dashboard/weather-image.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-6 xl-100 box-col-12">
              <div class="card">
                <div class="card-header no-border">
                  <h5> فعالیت امروز </h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                      <li><i class="view-html fa fa-code font-primary"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                      <li><i class="icofont icofont-error close-card font-primary"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="activity-table table-responsive">
                    <table class="table table-bordernone">
                      <tbody>
                        <tr>
                          <td>
                            <div class="activity-image"><img class="img-fluid" src="assets/images/dashboard/clipboard.png" alt=""></div>
                          </td>
                          <td>
                            <div class="activity-details">
                              <h4 class="default-text">15 <span class="f-14">مهر</span></h4>
                              <h6> کار جدید اضافه شد </h6>
                            </div>
                          </td>
                          <td>
                            <div class="activity-time"><span class="font-primary f-w-700">1 روز قبل</span><span class="d-block light-text"> مهلت کار شما 18 <sup>ساعت</sup></span></div>
                          </td>
                          <td>
                            <button class="btn btn-shadow-primary"> مشاهده </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="activity-image activity-secondary"><img class="img-fluid" src="assets/images/dashboard/greeting.png" alt=""></div>
                          </td>
                          <td>
                            <div class="activity-details">
                              <h4 class="default-text">01 <span class="f-14">دی </span></h4>
                              <h6> کار جدید اضافه شد </h6>
                            </div>
                          </td>
                          <td>
                            <div class="activity-time"><span class="font-secondary f-w-700"> 10 دقیقه قبل </span><span class="d-block light-text"> امروز کار خود را به روز کنید </span></div>
                          </td>
                          <td>
                            <button class="btn btn-shadow-secondary"> مشاهده </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&nbsp;&lt;div class="card-body pt-0"&gt;| &lt;div class="activity-table table-responsive"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="activity-image"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/clipboard.png" alt=""&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-details"&gt;
&lt;h4 class="default-text"&gt;15 &lt;span class="f-14"&gt;November&lt;/span&gt;&lt;/h4&gt;
&lt;h6&gt;New Task Added&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-time"&gt;&lt;span class="font-primary f-w-700"&gt;1 Day Ago&lt;/span&gt;&lt;span class="d-block light-text"&gt;Your Work Deadline 18&lt;sup&gt;th&lt;/sup&gt;&lt;/span&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;button class="btn btn-shadow-primary"&gt;View&lt;/button&gt;| &lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="activity-image activity-secondary"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/greeting.png" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-details"&gt;
&lt;h4 class="default-text"&gt;01 &lt;span class="f-14"&gt;January&lt;/span&gt;&lt;/h4&gt;
&lt;h6&gt;New Task Added&lt;/h6&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;div class="activity-time"&gt;&lt;span class="font-secondary f-w-700"&gt;10 Minute Ago&lt;/span&gt;&lt;span class="d-block light-text"&gt;Update Your Work Today&lt;/span&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;button class="btn btn-shadow-secondary"&gt;View &lt;/button&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;    </code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 xl-100 box-col-12">
              <div class="card">
                <div class="card-header no-border">
                  <h5> خریداران اخیر </h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                      <li><i class="view-html fa fa-code font-primary"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                      <li><i class="icofont icofont-error close-card font-primary"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="activity-table table-responsive recent-table">
                    <table class="table table-bordernone">
                      <tbody>
                        <tr>
                          <td>
                            <div class="recent-images"><img class="img-fluid" src="assets/images/dashboard/recent-user-1.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="default-text mb-0 f-w-700 f-18">احمد حسینی</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">نیویورک</span></td>
                          <td class="f-w-700">458-4594-5451</td>
                          <td>
                            <h6 class="mb-0">7 آذر</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-primary"><img class="img-fluid" src="assets/images/dashboard/recent-user-2.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-primary mb-0 f-w-700 f-18">مریم احمدی</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">برزیل</span></td>
                          <td class="f-w-700">812-4896-9812</td>
                          <td>
                            <h6 class="mb-0">6 آذر</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-secondary"><img class="img-fluid" src="assets/images/dashboard/recent-user-3.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-secondary mb-0 f-w-700 f-18">سهیلا محمدی</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">لندن</span></td>
                          <td class="f-w-700">215-0324-6541</td>
                          <td>
                            <h6 class="mb-0">6 آذر</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-warning"><img class="img-fluid" src="assets/images/dashboard/recent-user-4.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-warning mb-0 f-w-700 f-18">محدثه عباسی</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">آمریکا</span></td>
                          <td class="f-w-700">748-0012-3487</td>
                          <td>
                            <h6 class="mb-0">5 آذر</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head21" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head21">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0"&gt;
&lt;div class="activity-table table-responsive recent-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/recent-user-1.png" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="default-text mb-0 f-w-700 f-18"&gt;Nick Stone&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;New York&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;458-4594-5451&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;15 Jan&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-primary"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/recent-user-2.png" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-primary mb-0 f-w-700 f-18"&gt;Milano Esco&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;Brazil&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;812-4896-9812&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;06 Feb&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-secondary"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/recent-user-3.png" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-secondary mb-0 f-w-700 f-18"&gt;Charlie Pol&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;London&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;215-0324-6541&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;22 Feb&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="recent-images-warning"&gt;&lt;img class="img-fluid" src="assets/images/dashboard/recent-user-4.png" alt=""&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;h5 class="font-warning mb-0 f-w-700 f-18"&gt;Jordi Esol&lt;/h5&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge f-12"&gt;U.S.A&lt;/span&gt;&lt;/td&gt;
&lt;td class="f-w-700"&gt;748-0012-3487&lt;/td&gt;
&lt;td&gt;
&lt;h6 class="mb-0"&gt;18 Mar&lt;/h6&gt;
&lt;/td&gt;
&lt;td&gt;&lt;span class="badge badge-pill recent-badge"&gt;&lt;i data-feather="more-horizontal"&gt; &lt;/i&gt;&lt;/span&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 xl-100 box-col-12">
              <div class="card gradient-primary o-hidden">
                <div class="card-body">
                  <div class="setting-dot">
                    <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                  </div>
                  <div class="default-datepicker">
                    <div class="datepicker-here" data-language="en"></div>
                  </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">   </span></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
