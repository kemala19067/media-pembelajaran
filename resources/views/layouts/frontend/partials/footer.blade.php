
<div class="fullwidth-social-icons">
<div class="container-fluid">
<div class="row">
<ul>
    @foreach(App\Footerones::all()->take(1) as $fto)
<li>
<a class="facebook" href="{{$fto->facebook_link}}" target="_blank">
<span><i class="fa fa-facebook-f"></i> <small>Facebook</small></span>
</a>
</li>
<li>
<a class="twitter" href="{{$fto->twitter_link}}" target="_blank">
<span><i class="fa fa-twitter"></i> <small>Twitter</small></span>
</a>
</li>
<li>
<a class="google" href="{{$fto->google_link}}" target="_blank">
<span><i class="fa fa-google-plus"></i> <small>Google</small></span>
</a>
</li>
<li>
<a class="rss" href="{{$fto->instagram_link}}" target="_blank">
<span><i class="fa fa-rss"></i> <small>Rss Feed</small></span>
</a>
</li>
<li>
<a class="linkedin" href="{{$fto->linkedin_link}}" target="_blank">
<span><i class="fa fa-linkedin"></i> <small>Linkedin</small></span>
</a>
</li>
<li>
<a class="youtube" href="{{$fto->youtube_link}}" target="_blank">
<span><i class="fa fa-youtube"></i> <small>Youtube</small></span>
</a>
</li>
@endforeach
</ul>
</div>
</div>
</div>

<!-- Start: Footer -->
<footer class="site-footer">
<div class="container">
<div id="footer-widgets">
<div class="row">
<div class="col-md-4 col-sm-6 widget-container">
<div id="text-2" class="widget widget_text">
    <h3 class="footer-widget-title">About Libraria</h3>
    <span class="underline left"></span>
    @foreach(App\Footertwos::all()->take(1) as $ftt)
    <div class="textwidget">
        {{$ftt->title}}
    </div>
    <address>
        <div class="info">
            <i class="fa fa-location-arrow"></i>
            <span>{{$ftt->location}}</span>
        </div>
        <div class="info">
            <i class="fa fa-envelope"></i>
            <span><a href="mailto:{{$ftt->email}}">{{$ftt->email}}</a></span>
        </div>
        <div class="info">
            <i class="fa fa-phone"></i>
            <span><a href="tel:{{$ftt->moble}}">{{$ftt->mobile}}</a></span>
        </div>
        <div class="info">
            <i class="fa fa-earth"></i>
            <span><a href="{{$ftt->website_link}}">{{$ftt->website_link}}</a></span>
        </div>
        @endforeach
    </address>
</div>
</div>
<div class="col-md-4 col-sm-6 widget-container">
<div id="nav_menu-2" class="widget widget_nav_menu">
    <h3 class="footer-widget-title">Quick Links</h3>
    <span class="underline left"></span>
    <div class="menu-quick-links-container">
        <ul id="menu-quick-links" class="menu">
            @foreach(App\Footerthrees::all() as $fth)
            <li><a href="{{$fth->link}}">{{$fth->title}}</a></li>
             @endforeach
        </ul>
    </div>
</div>
</div>
<div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>

<div class="col-md-4 col-sm-6 widget-container">
<div class="widget twitter-widget">
    <h3 class="footer-widget-title">Follow on Facebook</h3>
    <span class="underline left"></span>
    <div id="twitter-feed">
        <ul>
           @foreach(App\Footerfours::all()->take(1) as $ftf)
           {!!$ftf->content!!}
           @endforeach
        </ul>
    </div>
</div>			
</div>
</div>
</div>                
</div>
<div class="sub-footer">
<div class="container">
<div class="row">
<div class="footer-text col-md-3">
    
<p><a target="_blank" href="https://soft.jiboneralo.com">Jiboner Alo Software</a></p>

</div>
<div class="col-md-9 pull-right">
<ul>
      @foreach($category as $catf)
    <li><a href="/category/{{$catf->id}}">{{$catf->category}}</a></li>
    @endforeach
     
</ul>
</div>
</div>
</div>
</div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('frontend/js/mmenu.min.js')}}"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="{{asset('frontend/js/harvey.min.js')}}"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="{{asset('frontend/js/waypoints.min.js')}}"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="{{asset('frontend/js/facts.counter.min.js')}}"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="{{asset('frontend/js/mixitup.min.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Accordion -->
<script type="text/javascript" src="{{asset('frontend/js/accordion.min.js')}}"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="{{asset('frontend/js/responsive.tabs.min.js')}}"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="{{asset('frontend/js/responsive.table.min.js')}}"></script>

<!-- Masonry -->
<script type="text/javascript" src="{{asset('frontend/js/masonry.min.js')}}"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="{{asset('frontend/js/carousel.swipe.min.js')}}"></script>

<!-- bxSlider -->
<script type="text/javascript" src="{{asset('frontend/js/bxslider.min.js')}}"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>


@yield('js')


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5de1765350493787"></script>


</body>


</html>