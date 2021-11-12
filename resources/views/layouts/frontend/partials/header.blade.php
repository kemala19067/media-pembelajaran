<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
<meta name="description" content="   জব প্রস্তুতির সেরা প্লাটফর্ম    ">
<meta name="keyword" content="oline education, Job preparation , job sulotion, bdjobs, bcs job preparation, bcs exam, jobs , chakori bazar ">



@yield('meta')

<!-- Title -->
<title>..::   Online Quiz ::..@yield('title')</title>

<!-- Favicon -->
<link href="{{asset('images/logo.png')}}" rel="icon" type="image/x-icon" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Mobile Menu -->
<link href="{{asset('frontend/css/mmenu.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

<!-- Stylesheet -->
<link href="{{asset('frontend/style.css')}}" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
 
@yield('css')

</head>

<body class="layout-v2" >

<!-- Start: Header Section -->
<header id="header" class="navbar-wrapper">
<div class="container">
<div class="row">
<nav class="navbar navbar-default">
<div class="col-sm-12">
<!-- Header Topbar -->
 
<div class="bg-light">
    <div class="row">
        <div class="col-sm-6">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <h1>
                        <a href="/">
                            <img src="{{asset('/frontend/images/libraria-logo-v2.png')}}" alt="LIBRARIA" />
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="navbar-collapse hidden-sm hidden-xs">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/">Home</a>
                         
                    </li>
                    @foreach($category as $cat)
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/category/{{$cat->id}}">{{$cat->category}}</a>
                         
                    </li>
                     @endforeach
                     <li><a href="/quiz">Quiz</a></li>
                    
                    <li><a href="/contacts/create">Contact</a></li>
                    @if(Sentinel::check())
                    <li><a href="/profile">My Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                    @else
                    <li><a href="/login">Login/Registation</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="mobile-menu hidden-lg hidden-md">
<a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
<div id="mobile-menu">
    <ul>
        <li class="mobile-title">
            <h4>Navigation</h4>
            <a href="#" class="close"></a>
        </li>
        <li>
            <a href="/">Home</a>
            
        </li>
        @foreach($category as $cat)
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/category/{{$cat->id}}">{{$cat->category}}</a>
                         
                    </li>
                     @endforeach
                        <li><a href="/quiz">Quiz</a></li>
                    
                    <li><a href="/contacts/create">Contact</a></li>
                    <li><a href="/login">Login/Registation</a></li>
    </ul>
</div>
</div>
</nav>
</div>
</div>
</header>
<!-- End: Header Section -->
