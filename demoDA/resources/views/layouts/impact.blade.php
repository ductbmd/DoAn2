<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project II</title>
    <link href="{{asset('impact/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/pe-icons.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('impact/css/formDuc.css') }}" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script src="{{asset('impact/js/jquery.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('impact/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('impact/images/ico/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('impact/images/ico/images/ico/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('impact/images/ico/apple-touch-icon-57x57.png')}}">
    <link href="{{ asset('css/duc.css') }}" rel="stylesheet">
    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "http://placehold.it/800x600",
            "http://placehold.it/800x600",
            "http://placehold.it/800x600"
        ], {duration: 5000, fade: 500});

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{     
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "{{asset('impact/images/marker.png')}}",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: { 
                image: "{{asset('impact/images/marker.png')}}", 
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search">
        </div>
    </div>
    </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><h1><span class="pe-7s-gleam bounce-in"></span> IMPACT</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('item.create') }}">Create</a></li>
                            <li><a href="{{ route('item.index') }}">Index</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">WareHouse & Department<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('warehouse.create') }}">Create warehouse</a></li>
                            <li><a href="{{ route('warehouse.index') }}">Ware house</a></li>
                            <li><a href="{{ route('department.create') }}">Create Department</a></li>
                            <li><a href="{{ route('warehouse.index') }}">Department</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('item.create') }}">Create Item</a></li>
                            <li><a href="{{ route('item.index') }}">Item</a></li>
                            <li><a href="{{ route('itemown.index') }}">Itemown</a></li>
                            <li><a href="{{ route('itemown.create') }}">ItemOwn create</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('customer.create') }}">Create</a></li>
                            <li><a href="{{ route('customer.index') }}">Index</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('staff.create') }}">Create</a></li>
                            <li><a href="{{ route('staff.index') }}">Index</a></li>
                            <li class="active"><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">@yield('title')</h2>
                                    <hr>
                                    <p>@yield('mota')</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
    @yield('content')
    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Global Coverage</h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>  
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Come See Us</h4>
                        <address>
                            <strong>Ace Towers</strong><br>
                            New York Ave,<br>
                            New York, 215648<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                        </address>
                    </div> <!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2014 <a target="_blank" href="http://www.distinctivethemes.com" title="Premium Themes and Templates">Distinctive Themes</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>

    <script src="{{asset('impact/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('impact/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('impact/js/plugins.js')}}"></script>
    <script src="{{asset('impact/js/init.js')}}"></script>
</body>
</html>