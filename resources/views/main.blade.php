<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from flatfull.com/themes/apply/html/dashboard.html?folded=false&bg=&aside=dark&brand=dark by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 07:45:12 GMT -->
<head>
    <meta charset="utf-8">
    <title>Vakman @yield("title")</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="http://flatfull.com/themes/apply/assets/images/logo.svg">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset("img/log.jpg")}}">
    {{Html::style("assets/font-awesome-4.7.0/css/font-awesome.min.css")}}
    {{Html::style("css/font-awesome-animation.min.css")}}
    {{Html::style("assets/css/app.min.css")}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <style type="text/css">
        .ajax-loader{
            position:absolute;
            top:0px;
            right:0px;
            width:100%;
            height:100%;
            background-color:#666;
            background-image:url('{{asset("img/loader.gif")}}');
            background-repeat:no-repeat;
            background-position:center;
            z-index:10000000;
            opacity: 0.4;
            filter: alpha(opacity=40); /* For IE8 and earlier */
        }

        #region,#profession,#jobs_categ,#login_categ{
            visibility: hidden;
        }

        .testimonial{ margin: 0 20px 50px; }
        .testimonial .pic{
            display: inline-block;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin: 0 15px 15px 0;
        }
        .testimonial .pic img{
            width: 100%;
            height: auto;
            border-radius: 50%;
        }
        .testimonial .testimonial-profile{
            display: inline-block;
            position: relative;
            top: 15px;
        }
        .testimonial .title{
            display: block;
            font-size: 20px;
            font-weight: 600;
            color: #2f2f2f;
            text-transform: capitalize;
            margin: 0 0 7px 0;
        }
        .testimonial .post{
            display: block;
            font-size: 14px;
            color: #5d7aa7;
        }
        .testimonial .description{
            padding: 20px 22px;
            background: #1f487e;
            font-size: 15px;
            color: #fff;
            line-height: 25px;
            margin: 0;
            position: relative;
        }
        .testimonial .description:before,
        .testimonial .description:after{
            content: "";
            border-width: 18px 0 0 18px;
            border-style: solid;
            border-color: #5d7aa7 transparent transparent;
            position: absolute;
            bottom: -18px;
            left: 0;
        }
        .testimonial .description:after{
            border-width: 18px 18px 0 0;
            left: auto;
            right: 0;
        }
        .owl-theme .owl-controls{
            margin-top: 10px;
            margin-left: 30px;
        }
        .owl-theme .owl-controls .owl-buttons div{
            opacity: 0.8;
            background: #fff;
        }
        .owl-prev:before,
        .owl-next:before{
            content: "\f053";
            font-family: 'FontAwesome';
            font-size: 20px;
            color: #1f487e;
        }
        .owl-wrapper{width: inherit;}
        .owl-next:before{ content: "\f054"; }
    </style>

</head>
<body>
<div class="app" id="app">
    <div id="aside" class="app-aside fade box-shadow-x nav-expand white" aria-hidden="true">
        <div class="sidenav modal-dialog dk white">
            <div class="navbar lt">
                <a href="/">
                    <img src="{{asset("img/vakman.png")}}" alt="Vakman" style="width: 100%">
                </a>
            </div>
            <div class="flex hide-scroll">
                <div class="scroll">
                    <div class="nav-border b-primary" data-nav>
                        <ul class="nav bg">
                            <li class="nav-header">
                                <span class="text-xs hidden-folded">Main</span></li>
                            <li><a href="/"><span class="nav-icon"><i
                                                class="fa fa-home"></i> </span><span
                                            class="nav-text">Home</span></a></li>
                            <li><a><span class="nav-caret"><i class="fa fa-caret-down"></i> </span><span
                                            class="nav-icon"><i class="fa fa-align-left"></i> </span><span
                                            class="nav-text">Room Category</span></a>
                                <ul class="nav-sub">
                                    <li><a href="layout.header.html"><span class="nav-text">Header</span></a></li>
                                    <li><a href="layout.sidenav.html"><span class="nav-text">Sidenav</span></a></li>
                                    <li><a href="layout.aside.html"><span class="nav-text">Aside</span></a></li>
                                    <li><a href="layout.flex.html"><span class="nav-text">Flex</span></a></li>
                                </ul>
                            </li>

                            <li class="pb-2 hidden-folded"></li>
                            <li>
                                <div class="col-sm-12 col-md-12">
                                <div class="box">
                                <div class="item" style="margin-top: 33%;">
                                <a href="https://info.flagcounter.com/X2zH" style="min-height: 100px;">
                                <img src="https://s01.flagcounter.com/count2/X2zH/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0" width="100%">
                                </a>
                                </div>
                                </div>
                                </div>

                            </li><!-- br-menu-item -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="no-shrink lt">
                <div class="nav-fold">
                    <a class="d-flex p-2-3" data-toggle="dropdown"><span
                                class="avatar w-28 grey hide">J</span> <img src="../assets/images/a0.jpg" alt="..."
                                                                            class="w-28 circle"></a>
                    <div class="dropdown-menu w pt-0 mt-2 animate fadeIn">
                        <a class="dropdown-item" href="profile.html"><span>Profile</span> </a><a class="dropdown-item"
                                                                                                 href="setting.html"><span>Settings</span>
                        </a><a class="dropdown-item" href="app.inbox.html"><span class="float-right"><span
                                        class="badge info">6</span></span> <span>Inbox</span> </a><a
                                class="dropdown-item" href="app.message.html"><span>Message</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="docs.html">Need help? </a><a class="dropdown-item"
                                                                                    href="signin.html">Sign out</a>
                    </div>
                    <div class="hidden-folded flex p-2-3 bg">
                        <div class="d-flex p-1"><a href="app.inbox.html" class="flex text-nowrap"><i
                                        class="fa fa-bell text-muted mr-1"></i> <span
                                        class="badge badge-pill theme">20</span> </a><a href="lockme.html" class="px-2"
                                                                                        data-toggle="tooltip"
                                                                                        title="Logout"><i
                                        class="fa fa-power-off text-muted"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="app-content box-shadow-0" role="main">
        <div class="content-header white box-shadow-0" id="content-header">
            <div class="navbar navbar-expand-lg"><a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z"/>
                    </svg>
                </a>
                <div class="navbar-text nav-title flex" id="pageTitle"></div>
                <ul class="nav flex-row order-lg-2">
                    <li class="dropdown d-flex align-items-center"><a href="#" data-toggle="dropdown"
                                                                      class="d-flex align-items-center"><span
                                    class="avatar w-32"><img src="{{asset("img/user.png")}}" alt="User"></span></a>
                        <div class="dropdown-menu dropdown-menu-right w pt-0 mt-2 animate fadeIn">
                            <a class="dropdown-item" href="profile.html"><span>Profile</span> </a><a
                                    class="dropdown-item" href="setting.html"><span>Settings</span> </a><a
                                    class="dropdown-item" href="app.inbox.html"><span class="float-right"><span
                                            class="badge info">6</span></span> <span>Inbox</span> </a><a
                                    class="dropdown-item" href="app.message.html"><span>Message</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="docs.html">Need help? </a><a class="dropdown-item"
                                                                                        href="signin.html">Sign out</a>
                        </div>
                    </li>
                    <li class="d-lg-none d-flex align-items-center"><a href="#" class="mx-2" data-toggle="collapse"
                                                                       data-target="#navbarToggler">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                <path d="M64 144h384v32H64zM64 240h384v32H64zM64 336h384v32H64z"/>
                            </svg>
                        </a></li>
                </ul>
                <div class="collapse navbar-collapse no-grow order-lg-1" id="navbarToggler">
                    <form class="input-group m-2 my-lg-0"><span class="input-group-btn"><button type="button"
                                                                                                class="btn no-border no-bg no-shadow"><i
                                        class="fa fa-search"></i></button> </span><input type="text"
                                                                                         class="form-control no-border no-bg no-shadow"
                                                                                         placeholder="Search job...">
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main" id="content-main">
            @yield("main-content")
        </div>
        <div class="content-footer white" id="content-footer">
           @include("partials.footer")
        </div>
    </div>
</div>
<div id="setting">
    @include("partials.theme-change")
</div>

{{Html::script("assets/scripts/app.min.js")}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });
</script>
   @yield("page-script")
</body>
<!-- Mirrored from flatfull.com/themes/apply/html/dashboard.html?folded=false&bg=&aside=dark&brand=dark by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 07:46:19 GMT -->
</html>