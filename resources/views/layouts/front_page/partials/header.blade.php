<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Infra</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

<!-- favicon
============================================ -->    
<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('front_page/img/favicon.png')}}">

<!-- Google Fonts
============================================ -->    
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>

<!-- Bootstrap CSS
============================================ -->    
<link rel="stylesheet" href="{{URL::asset('front_page/css/bootstrap.min.css')}}">

<!-- Fontawsome CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/font-awesome.min.css')}}">

<!-- Owl Carousel CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/owl.carousel.css')}}">

<!-- jquery-ui CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/jquery-ui.css')}}">

<!-- Meanmenu CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/meanmenu.min.css')}}">

<!-- Animate CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/animate.css')}}">

<!-- Animated Headlines CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/animated-headlines.css')}}">

<!-- Nivo slider CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/lib/nivo-slider/css/nivo-slider.css')}}" type="text/css" />
<link rel="stylesheet" href="{{URL::asset('front_page/lib/nivo-slider/css/preview.css')}}" type="text/css" media="screen" />

<!-- Metarial Iconic Font CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/material-design-iconic-font.css')}}">
<link rel="stylesheet" href="{{URL::asset('front_page/css/material-design-iconic-font.min.css')}}">

<!-- Slick CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/slick.css')}}">

<!-- Video CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/jquery.mb.YTPlayer.css')}}">

<!-- Style CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/style.css')}}">

<!-- Color CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/color.css')}}">

<!-- Responsive CSS
============================================ -->
<link rel="stylesheet" href="{{URL::asset('front_page/css/responsive.css')}}">

@yield('style')
<style type="text/css">
    #subscrib-button{
        background-color: #2d3e50!important;
        border-color:#2d3e50!important;
    }
     #subscrib-button:hover {
        background-color: #ffffff!important;
       color:#2d3e50!important;
     }
     .newsletter-area{
        margin-top: 100px;
     }
</style>
<!-- Modernizr JS
============================================ -->    
<script src="{{URL::asset('front_page/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>
<body>
<!--Main Wrapper Start-->
<div class="as-mainwrapper">
<!--Bg White Start-->
<div class="bg-white">
<!--Header Area Start-->
<header>
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
<span>Have any question? +8801736185148</span>
</div>
<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
<div class="header-top-right">
     @if(Sentinel::check())
      <div class="content"><a href="#"><i class="zmdi zmdi-account"></i> My Account</a>
                                            <ul class="account-dropdown">
                                                <li><a href="/profile">My Profile</a></li>
                                                <li><a href="#">Log In</a></li>
                                                <li><a href="#">Register</a></li>
                                                <li><a href="#">Blog</a></li>
                                            </ul>
                                        </div>
    <div class="content"><a href="/logout">Logout</a></div>
        
    @else
    <div class="content"><a href="/login">Login</a></div>
    <div class="content"><a href="/join-us" >Join Us</a></div>
    @endif
</div>
</div>
</div>
</div>
</div>

<div class="row header-logo-menu  sticker">
    <div class="col-md-2 col-sm-12  ">
<div class="logo">
    <a href="/"><img src="{{asset('front_page/logo/infra-logo.jpg')}}" alt="logo" style="height: 120px;"></a>
</div>
</div>
<div class="col-md-10">
    <div class="row">
        <div class="col-md-10" style="text-align:center;overflow:auto;margin-top:16PX;color:#4da6ff;position:relative;overflow:hidden;">
<h2>INFRA POLYTECHNIC INSTITUTE, BARISHAL</h2>
</div>
<div class="col-md-2" style="text-align: center;overflow:auto;margin-top:16PX;">
    <!-- <a href="http://web.infra.edu.bd" class="btn btn-danger" target="blank"><i class="zmdi zmdi-account"></i>&nbsp;&nbsp;Login</a> -->
</div>
    </div>
    <div class="row header-logo-menu sticker">
        <div class="">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="mainmenu-area">
    <div class="mainmenu hidden-sm hidden-xs">
        <nav>
            <ul id="nav">
                <li class="current"><a href="/">Home</a>
                     <!-- <ul class="sub-menu">
                    @foreach($messages as $message)
            <li><a href="/m/{{$message->title}}/{{$message->id}}">{{$message->title}}</a></li>
                        @endforeach
                         
                    </ul>
 -->
                </li>
             
                <li><a href="/about-us">About us</a>
                <li><a href="/our-service">Our Service</a>
                   <!--  <ul class="sub-menu">
                        @foreach($courses as $course)

                        <li><a href="/course/{{$course->course_name}}">{{$course->course_name}}</a></li>
                     @endforeach

                    </ul> -->
                </li>
                <li><a href="/our-events">Events</a>
                    <!--<ul class="sub-menu">-->
                    <!--    <li><a href="about.html">About Us</a></li>-->
                    <!--    <li><a href="courses.html">Courses Page</a></li>-->
                    <!--    <li><a href="courses-details.html">Course Details Page</a></li>-->
                    <!--    <li><a href="event.html">Event Page</a></li>-->
                    <!--    <li><a href="event-details.html">Event Details Page</a></li>-->
                    <!--    <li><a href="latest-news.html">Latest News Page</a></li>-->
                    <!--    <li><a href="news-details.html">News Details Page</a></li>-->
                    <!--    <li><a href="shop-grid.html">Shop Page</a></li>-->
                    <!--    <li><a href="product-details.html">Product Details Page</a></li>-->
                    <!--    <li><a href="contact.html">Contact</a></li>-->
                    <!--</ul>-->
                </li>
                <li><a href="/our-members">Members</a>
                     
                </li>
                <li><a href="/discuss/create">Discuss</a>
                    
                </li>
                    <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contacts/create">Contact us</a></li>
            
               
            </ul>
        </nav>
    </div>
   
    <!--End of Search Form-->
</div> 
</div>
</div>
</div>
</div>  
    </div>
</div>

</div>

<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="mobile-menu">
    <nav id="dropdown">
            <ul id="nav">
                <li class="current"><a href="/">Home</a>
                     <ul class="sub-menu">
                    @foreach($messages as $message)
            <li><a href="/m/{{$message->title}}/{{$message->id}}">{{$message->title}}</a></li>
                        @endforeach
                         
                    </ul>

                </li>
              
                <li><a href="#">Academic</a>
                    <ul class="sub-menu">
                        @foreach($courses as $course)

                        <li><a href="/course/{{$course->course_name}}">{{$course->course_name}}</a></li>
                     @endforeach

                    </ul>
                </li>
                <li><a href="#">Admission</a>
                    <!--<ul class="sub-menu">-->
                    <!--    <li><a href="about.html">About Us</a></li>-->
                    <!--    <li><a href="courses.html">Courses Page</a></li>-->
                    <!--    <li><a href="courses-details.html">Course Details Page</a></li>-->
                    <!--    <li><a href="event.html">Event Page</a></li>-->
                    <!--    <li><a href="event-details.html">Event Details Page</a></li>-->
                    <!--    <li><a href="latest-news.html">Latest News Page</a></li>-->
                    <!--    <li><a href="news-details.html">News Details Page</a></li>-->
                    <!--    <li><a href="shop-grid.html">Shop Page</a></li>-->
                    <!--    <li><a href="product-details.html">Product Details Page</a></li>-->
                    <!--    <li><a href="contact.html">Contact</a></li>-->
                    <!--</ul>-->
                </li>
                <li><a href="#">Facalty & Staff</a>
                    <ul class="sub-menu">
                        <li><a href="/faculty/members">Facalty</a></li>
                        <li><a href="/officers/staffs">Officer & Staff</a></li>
                    </ul>
                </li>
                <li><a href="#">Student Guide</a>
                    <ul class="sub-menu">
                        <li><a href="#">Student</a></li>
                    </ul>
                </li>
                <li><a href="#">Scholarship</a></li>
                <li><a href="/gallery">Gallery</a></li>
                
            </ul>
        </nav>
</div>        
</div>
</div>
</div>
</div>
<!-- Mobile Menu Area end -->    
</header>