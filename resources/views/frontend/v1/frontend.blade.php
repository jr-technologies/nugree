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

                @if(session()->get('authUser') ==null)
                <li><a href="{{ URL::to('/login') }}"><span class="hidden-xs">Login / Register</span><span class="icon-profile2 hidden"></span></a></li>
                   @else
                    <li>
                        <a href="#"><span class="hidden-xs">Atif sultan</span><span class="icon-profile2 hidden"></span></a>
                        <ul class="dropDown">
                            <li><a href="{{URL::to('dashboard#/home/profile')}}">my profile</a></li>
                            <li><a href="{{URL::to('dashboard#/home/properties/all')}}">my listing</a></li>
                            <li><a href="{{URL::to('/logout')}}">logout</a></li>
                        </ul>
                    </li>
                @endif
                    <li><a href="{{ URL::to('add-property') }}"><span class="hidden-xs">List you property</span><span class="icon-plus-square hidden"></span></a></li>
            </ul>
        </div>
    </header>
    <main id="main" role="main">
        <div class="page-holder">

            @yield('content')

        </div>
    </main>
    <footer id="footer">
        <div class="footer-holder">
            <div class="container">
                <div class="col">
                    <h1><span>Get in</span> Touch</h1>
                    <form class="submit-query">
                        <div class="input-holder"><input type="text" placeholder="Name" ></div>
                        <div class="input-holder"><input type="email" placeholder="Email"></div>
                        <div class="input-holder"><input type="number" placeholder="Phone" value=""></div>
                        <div class="input-holder"><input type="text" placeholder="Subject"></div>
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit">Send email <span class="icon-arrow-right"></span></button>
                    </form>
                </div>
                <div class="col">
                    <ul class="social-plugins">
                        <li><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fproperty42pk-1562646287317094%2F&tabs=timeline&width=340&height=384&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="384" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></li>
                        <li><a class="twitter-timeline" data-height="384" href="https://twitter.com/Property42_pk">Tweets by Property42_pk</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-footer">
                <span class="rights">&copy;2016 <a href="#">nugree.com</a> All rights reserved</span>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/proerty92pk-354399088098995/"><span class="icon-facebook"></span></a></li>
                    <li><a href="https://plus.google.com/118057576547955586597?hl=en"><span class="icon-google-plus-symbol"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/nugree-pakistan-29a8a312a?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
                    <li><a href="https://twitter.com/92nugree"><span class="icon-twitter"></span></a></li>
                    <li><a href="https://www.instagram.com/Nugree_Pakistan/"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>

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
            <li><a href="https://www.facebook.com/proerty92pk-354399088098995/"><span class="icon-facebook"></span></a></li>
            <li><a href="https://plus.google.com/118057576547955586597?hl=en"><span class="icon-google-plus-symbol"></span></a></li>
            <li><a href="https://www.linkedin.com/in/nugree-pakistan-29a8a312a?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
            <li><a href="https://twitter.com/92nugree"><span class="icon-twitter"></span></a></li>
            <li><a href="https://www.instagram.com/Nugree_Pakistan/"><span class="icon-instagram"></span></a></li>
        </ul>
        <span class="copyright">Copyright, <a href="#">nugree.com</a></span>
    </div>
</nav>
<div class="nav-blur-area">
    <div class="logo-holder"><img src="{{url('/')}}/web-apps/frontend/assets/images/logo.png" alt="Nugree"></div>
    <ul class="bottom-links">
        <li><a href="#">www.nugree.com</a></li>
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
<script src="{{url('/')}}/web-apps/frontend/v2/js/registration.js" type="text/javascript" defer></script>
<script type="text/javascript" src="{{url('/')}}/assets/js/env.js"></script>
<script src="{{url('/')}}/web-apps/frontend/v2/js/property_detail.js" type="text/javascript"></script>
</body>
</html>