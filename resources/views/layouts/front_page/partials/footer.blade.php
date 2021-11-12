
<div class="newsletter-area" >
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-5">
<div class="newsletter-content">
<h3>SUBSCRIBE</h3>
<h2>TO OUR NEWSLETTER</h2>
</div>
</div>
<div class="col-md-7 col-sm-7">
<div class="newsletter-form angle">
<form action="/subscribe" method="POST" class="footer-newsletter fix">
    {{csrf_field()}}
    <div class="subscribe-form">
        
            
        <input type="email" name="email" placeholder="Enter your email address...">
        <input type="hidden" name="date" value="{{date('Y-m-d')}}">
        <button type="submit" id="subscrib-button">SUBSCRIBE</button>
  
    </div>    
</form>
<!-- mailchimp-alerts Start -->
<div class="mailchimp-alerts text-centre fix pull-right">
    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
</div>
<!-- mailchimp-alerts end -->
</div>
</div>
</div>
</div>
</div>
<!--End of Newsletter Area-->
<!--Footer Widget Area Start-->
<div class="footer-widget-area">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-4">
<div class="single-footer-widget">
<div class="footer-logo">
    <a href="/"><img src="{{asset('front_page/img/favicon.png')}}" alt="" style="height:100px;width:100px;"></a>
</div>
<p>Infra Polytechnic Institute, Barishal </p>
<div class="social-icons">
    <a href="https://facebook.com/infrapoly"><i class="zmdi zmdi-facebook"></i></a>
    <a href="#"><i class="zmdi zmdi-rss"></i></a>
    <a href="https://plush.google.com"><i class="zmdi zmdi-google-plus"></i></a>
    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-4">
<div class="single-footer-widget">
<h3>GET IN TOUCH</h3>
<a href="tel:555-555-1212"><i class="fa fa-phone"></i>01733336430</a>
<span><i class="fa fa-envelope"></i>info@infra.edu.bd</span>
<span><i class="fa fa-globe"></i>www.infra.edu.bd</span>
<span><i class="fa fa-map-marker"></i>Kashipur, Barishal</span>
</div>
</div>
<div class="col-md-3 hidden-sm">
<div class="single-footer-widget">
<h3>Useful Links</h3>
<ul class="footer-list">
    <li><a href="https://moedu.gov.bd/">Ministry of Education </a></li>
    <li><a href="https://pmo.gov.bd/">Prime minister’s office </a></li>
    <li><a href="http://www.bteb.gov.bd/">BTEB</a></li>
    <li><a href="https://a2i.gov.bd/">a2i</a></li>
    <li><a href="http://www.educationboardresults.gov.bd/">Education Board Result </a></li>
    <li><a href="https://ugv.edu.bd/">University of Global Village</a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-4">
<div class="single-footer-widget">
<h3>Facebook</h3>
<div class="instagram-image">
   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finfrapoly%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=317388532156739" width="340" height="150px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>

<footer class="footer-area">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-7">
<span>Copyright &copy; Infra 2019.All right reserved.Created by <a href="#"></a></span>
</div>
<div class="col-md-6 col-sm-5">
<div class="column-right">

</div>
</div>
</div>
</div>
</footer>
<!--End of Footer Area-->
</div>   
<!--End of Bg White--> 
</div>    
<!--End of Main Wrapper Area--> 


<!-- jquery
============================================ -->		
<script src="{{URL::asset('front_page/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!-- bootstrap JS
============================================ -->
@yield('script')
<script src="{{URL::asset('front_page/js/bootstrap.min.js')}}"></script>

<!-- nivo slider js
============================================ -->       
<script src="{{URL::asset('front_page/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('front_page/lib/nivo-slider/home.js')}}" type="text/javascript"></script>

<!-- meanmenu JS
============================================ -->		
<script src="{{URL::asset('front_page/js/jquery.meanmenu.js')}}"></script>

<!-- wow JS
============================================ -->		
<script src="{{URL::asset('front_page/js/wow.min.js')}}"></script>

<!-- owl.carousel JS
============================================ -->		
<script src="{{URL::asset('front_page/js/owl.carousel.min.js')}}"></script>

<!-- scrollUp JS
============================================ -->		
<script src="{{URL::asset('front_page/js/jquery.scrollUp.min.js')}}"></script>

<!-- Waypoints JS
============================================ -->		
<script src="{{URL::asset('front_page/js/waypoints.min.js')}}"></script>

<!-- Counterup JS
============================================ -->		
<script src="{{URL::asset('front_page/js/jquery.counterup.min.js')}}"></script>

<!-- Slick JS
============================================ -->		
<script src="{{URL::asset('front_page/js/slick.min.js')}}"></script>

<!-- Animated Headlines JS
============================================ -->		
<script src="{{URL::asset('front_page/js/animated-headlines.js')}}"></script>

<!-- Textilate JS
============================================ -->		
<script src="{{URL::asset('front_page/js/textilate.js')}}"></script>

<!-- Lettering JS
============================================ -->		
<script src="{{URL::asset('front_page/js/lettering.js')}}"></script>

<!-- Video Player JS
============================================ -->		
<script src="{{URL::asset('front_page/js/jquery.mb.YTPlayer.js')}}"></script>



<!-- plugins JS
============================================ -->		
<script src="{{URL::asset('front_page/js/plugins.js')}}"></script>


<!-- main JS
============================================ -->		
<script src="{{URL::asset('front_page/js/main.js')}}"></script>
</body>
</html>