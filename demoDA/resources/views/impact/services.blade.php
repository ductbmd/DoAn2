<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test in demoDA</title>
    <link href="{{asset('impact/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/pe-icons.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('impact/css/style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script src="{{asset('impact/js/jquery.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('impact/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('impact/images/ico/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('impact/images/ico/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('impact/images/ico/images/ico/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('impact/images/ico/apple-touch-icon-57x57.png')}}">

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
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li> 
                    <li><a href="contact-us.html">Contact</a></li> 
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="project-item.html">Project Single</a></li>
                            <li><a href="blog-item.html">Blog Single</a></li>
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
                                    <h2 class="main-title">Our Services</h2>
                                    <hr>
                                    <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>             
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-windows fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Windows Apps</h3>
                                <p>Unfeeling so rapturous discovery he exquisite. Reasonably so middletons or impression by terminated. Old pleasure required removing elegance him had. Down she bore sing saw calm high.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-android fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Facebook Marketing</h3>
                                <p>The who arrival end how fertile enabled. Brother she add yet see minuter natural smiling article painted. Themselves at dispatched interested insensible am be prosperous reasonably it. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-apple fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">iOS Development</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-linux fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Linux Development</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-dribbble fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Graphic Design</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-google-plus fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">SEO Services</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Our Skills</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>               
                </div>
            </div>
            <div class="container">     
            <div class="row">            
                    <div class="col-md-3">
                        <div class="tile-progress tile-red bounce-in">
                            <div class="tile-header">
                                <h3>Video Editing</h3>
                                <span>Our cutting room floor is messy.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="65.5%" style="width: 65.5%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">65.5</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-cyan bounce-in">
                            <div class="tile-header">
                                <h3>Marketing</h3>
                                <span>How well we can sell you and your brand.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="98.5%" style="width: 98.5%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">98.5</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-primary bounce-in">
                            <div class="tile-header">
                                <h3>Web Development</h3>
                                <span>We love servers and stuff.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="90%" style="width: 90%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">90</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-pink bounce-in">
                            <div class="tile-header">
                                <h3>Coffee</h3>
                                <span>We done make good joe, though.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="10%" style="width: 10%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">10</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
                <div class="gap"></div>
            </div>
        </section>
    </div>

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