<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link media="all" rel="stylesheet" href="{{url('/')}}/web-apps/frontend/assets/css/main.css">
    <title>Largest website for property | nugree.com</title>
    <link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <a class="nav-opener navigation-toggler"><span></span><strong>Menu</strong></a>
        <div class="logo"><a href="{{url('/')}}"><img src="{{url('/')}}/web-apps/frontend/assets/images/logo.png" alt="nugree.com"></a></div>
        <div class="right-area">
            <a class="searchOpener"><span class="icon-search"></span></a>
            <ul class="customLinks">
                <li><a href="{{ URL::to('/login') }}">Login / Register</a></li>
                <li><a href="#">List you property</a></li>
            </ul>
        </div>
    </header>
    <main id="main" role="main">
        <div class="page-holder">

            @yield('content')

        </div>
    </main>
</div>
<nav id="nav">
    <a class="navigation-toggler close"><span class="icon-cross"></span></a>
    <form class="searchByID hidden">
        <input type="search" placeholder="Search by ID">
        <button type="submit"><span class="icon-search"></span></button>
    </form>
    <ul class="main-navigation text-upparcase">
        <li class="">
            <a href="{{URL::to('/')}}">HOME</a>
        </li>
        <li>
            <a href="{{URL::to('/')}}/search">Properties</a>
        </li>
        <li>
            <a href="{{URL::to('agents')}}">AGENTS</a>
        </li>
        <li>
            <a href="{{(Route::getCurrentRoute()->getPath() !='/')? url('/').'#about-us':'#about-us'}}" class="{{(Route::getCurrentRoute()->getPath() !='/')? '':'scroll'}}">ABOUT</a>
        </li>
        <li>
            <a href="{{(Route::getCurrentRoute()->getPath() !='/')? url('/').'#contact-us':'#contact-us'}}" class="{{(Route::getCurrentRoute()->getPath() !='/')? '':'scroll'}}">CONTACT</a>
        </li>
    </ul>
    <div class="mobile-content text-center">
        <ul class="social-icons">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-google-plus-symbol"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
        <span class="copyright">Copyright, <a href="#">Property42.pk</a></span>
    </div>
</nav>
<div class="nav-blur-area">
    <div class="logo-holder"><img src="images/logo.png" alt="Property42"></div>
    <ul class="bottom-links">
        <li><a href="#">www.property42.pk</a></li>
        <li><a class="mail" href="mailto:&#105;&#110;&#102;&#111;&#064;&#112;&#114;&#111;&#112;&#101;&#114;&#116;&#121;&#052;&#050;&#046;&#112;&#107;">&#105;&#110;&#102;&#111;&#064;&#112;&#114;&#111;&#112;&#101;&#114;&#116;&#121;&#052;&#050;&#046;&#112;&#107;</li>
    </ul>
</div>
<script src="{{url('/')}}/web-apps/frontend/assets/js/smooth-scroll.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/star-rating.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/select2-min.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery.carousel.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery.slideshow.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/placeholder.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/fixed-block.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/lightBox.js" type="text/javascript" defer></script>
<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery-main.js" type="text/javascript" defer></script>
<script type="text/javascript" src="{{url('/')}}/assets/js/env.js"></script>
<script src="{{url('/')}}/web-apps/frontend/v2/js/property_detail.js" type="text/javascript"></script>
</body>
</html>