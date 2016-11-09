
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<meta property="og:description" content="[content description]" />--}}
    {{--<link media="all" rel="stylesheet" href="{{url('/')}}/web-apps/frontend/assets/css/main.css">--}}
    {{--<title>Largest website for property | nugree.com</title>--}}
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-192x192.png" sizes="192x192">--}}
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-160x160.png" sizes="160x160">--}}
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-96x96.png" sizes="96x96">--}}
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-32x32.png" sizes="32x32">--}}
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/web-apps/frontend/assets/images/favicon-16x16.png" sizes="16x16">--}}

    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">--}}
    {{--<script type="text/javascript" src="{{url('/')}}/assets/js/env.js"></script>--}}
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
    {{--<script type="text/javascript">window.jQuery || document.write('<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery-1.11.2.min.js"><\/script>')</script>--}}
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>--}}
    {{--<script src="{{url('/')}}/assets/js/select2.full.js" type="text/javascript"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="wrapper">--}}
    {{--<header id="header">--}}
        {{--<a class="nav-opener navigation-toggler"><span></span><strong>Menu</strong></a>--}}
        {{--<div class="logo"><a href="{{url('/')}}"><img src="{{url('/')}}/web-apps/frontend/assets/images/logo.png" alt="nugree.com"></a></div>--}}
        {{--<div class="right-area">--}}
            {{--<a class="searchOpener"><span class="icon-search"></span></a>--}}
            {{--{{ Form::open(array('url' => 'property','method' => 'GET','class'=>'searchById')) }}--}}
                {{--<input type="number" placeholder="Search by ID" name="propertyId" value="{{(isset($response['data']['propertyId']))?$response['data']['propertyId']:""}}">--}}
                {{--<button type="submit"><span class="icon-search"></span></button>--}}
            {{--{{Form::close()}}--}}

            {{--<ul class="customLinks">--}}
                {{--@if(!isset($_SESSION['authUser']))--}}
                    {{--<li><a href="{{ URL::to('/login') }}">Login / Register</a></li>--}}
                {{--@else--}}
                    {{--<li>--}}
                        {{--<a href="#"><span class="hidden-xs">{{str_limit($_SESSION['authUser']->fName.' '.$_SESSION['authUser']->lName,13)}}</span><span class="icon-profile2 hidden"></span></a>--}}
                        {{--<ul class="dropDown">--}}
                            {{--<li><a href="{{URL::to('dashboard#/home/profile')}}">my profile</a></li>--}}
                            {{--<li><a href="{{URL::to('dashboard#/home/properties/all')}}">my listing</a></li>--}}
                            {{--<li><a href="{{URL::to('/logout')}}">logout</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
                    {{--<li><a class="fixed-ui-mob" href="{{ URL::to('add-property') }}">List property</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</header>--}}
    {{--<main id="main" role="main">--}}
        {{--<div class="page-holder">--}}
             {{--@yield('content')--}}
        {{--</div>--}}
    {{--</main>--}}
    {{--<footer id="footer">--}}
        {{--<div class="footer-holder">--}}
            {{--<div class="container">--}}
                {{--<div class="col">--}}
                    {{--<h1><span>Get in</span> Touch</h1>--}}
                    {{--{{Form::open(array('url'=>'feedback','method'=>'POST','class'=>'submit-query'))}}--}}
                        {{--<div class="input-holder"><input type="text" placeholder="Name" name="name" ></div>--}}
                        {{--<div class="input-holder"><input type="email" placeholder="Email" name="email" required></div>--}}
                        {{--<div class="input-holder"><input type="text" placeholder="Phone" value="" name="phone"></div>--}}
                        {{--<div class="input-holder"><input type="text" placeholder="Subject" name="subject" required></div>--}}
                        {{--<textarea placeholder="Your message" name="message" required></textarea>--}}
                        {{--<button type="submit">Send email <span class="icon-arrow-right"></span></button>--}}
                    {{--{{Form::close()}}--}}
                {{--</div>--}}
                {{--<div class="col">--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="bottom-footer">--}}
                {{--<span class="rights">&copy;2016 <a href="{{URL::to('/')}}">nugree.com</a> All rights reserved</span>--}}
                {{--<ul class="social-icons">--}}
                    {{--<li><a href="https://www.facebook.com/Nugreecom-354399088098995/"><span class="icon-facebook"></span></a></li>--}}
                    {{--<li><a href="https://plus.google.com/118057576547955586597?hl=en"><span class="icon-google-plus-symbol"></span></a></li>--}}
                    {{--<li><a href="https://www.linkedin.com/in/nugree-pakistan-29a8a312a?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>--}}
                    {{--<li><a href="https://twitter.com/92nugree"><span class="icon-twitter"></span></a></li>--}}
                    {{--<li><a href="https://www.instagram.com/Nugree_Pakistan/"><span class="icon-instagram"></span></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</footer>--}}
    {{--<a href="#submit-requirement-popup" class="submit-requirement lightbox">Share <span class="hidden-xs">your</span> requirements</a>--}}

{{--</div>--}}
{{--<nav id="nav">--}}
    {{--<a class="navigation-toggler close"><span class="icon-cross"></span></a>--}}
    {{--<form class="searchByID hidden">--}}
        {{--<input type="search" placeholder="Search by ID">--}}
        {{--<button type="submit"><span class="icon-search"></span></button>--}}
    {{--</form>--}}
    {{--<ul class="main-navigation text-upparcase">--}}
        {{--<li class="">--}}
            {{--<a href="{{URL::to('/')}}">HOME</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="{{URL::to('/')}}/search">Properties</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="{{URL::to('agents')}}">AGENTS</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="{{(Route::getCurrentRoute()->getPath() !='/')? url('/').'#about-us':'#about-us'}}" class="{{(Route::getCurrentRoute()->getPath() !='/')? '':'back-to-top'}}">ABOUT</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="{{(Route::getCurrentRoute()->getPath() !='/')? url('/').'#footer':'#footer'}}" class="{{(Route::getCurrentRoute()->getPath() !='/')? '':'back-to-top'}}">CONTACT</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<div class="mobile-content text-center">--}}
        {{--<ul class="social-icons">--}}
            {{--<li><a href="https://www.facebook.com/Nugreecom-354399088098995/"><span class="icon-facebook"></span></a></li>--}}
            {{--<li><a href="https://plus.google.com/118057576547955586597?hl=en"><span class="icon-google-plus-symbol"></span></a></li>--}}
            {{--<li><a href="https://www.linkedin.com/in/nugree-pakistan-29a8a312a?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>--}}
            {{--<li><a href="https://twitter.com/92nugree"><span class="icon-twitter"></span></a></li>--}}
            {{--<li><a href="https://www.instagram.com/Nugree_Pakistan/"><span class="icon-instagram"></span></a></li>--}}
        {{--</ul>--}}
        {{--<span class="copyright">Copyright, <a href="{{URL::to('/')}}">nugree.com</a></span>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<div class="nav-blur-area">--}}
    {{--<div class="logo-holder"><img src="{{url('/')}}/web-apps/frontend/assets/images/logo.png" alt="Nugree"></div>--}}
    {{--<ul class="bottom-links">--}}
        {{--<li><a href="{{URL::to('/')}}">www.nugree.com</a></li>--}}
        {{--<li><a class="mail" href="mailto:&#105;&#110;&#102;&#111;&#064;&#110;&#117;&#103;&#114;&#101;&#101;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#110;&#117;&#103;&#114;&#101;&#101;&#046;&#099;&#111;&#109;</a></li>--}}
    {{--</ul>--}}
{{--</div>--}}
{{--<div class="popup-holder">--}}
    {{--<div id="submit-requirement-popup" class="lightbox generic-lightbox">--}}
        {{--<span class="lighbox-heading">Submit your <span>requirement</span></span>--}}
        {{--{{Form::open(array('url' => 'user/requirement','method' => 'POST' ,'class'=>"inquiry-email-form"))}}--}}

        {{--<div class="field-holder">--}}
            {{--<label for="requirement-name">Name</label>--}}
            {{--<div class="input-holder"><input type="text" id="requirement-name" name="name"></div>--}}
        {{--</div>--}}
        {{--<div class="field-holder">--}}
            {{--<label for="requirement-email">Email</label>--}}
            {{--<div class="input-holder"><input type="email" id="requirement-email" name="email"></div>--}}
        {{--</div>--}}
        {{--<div class="field-holder">--}}
            {{--<label for="requirement-phone">Mobile</label>--}}
            {{--<div class="input-holder"><input type="tel" id="requirement-phone" name="phone"></div>--}}
        {{--</div>--}}
        {{--<div class="field-holder">--}}
            {{--<label for="requirement-subject">Purpose</label>--}}
            {{--<div class="input-holder"><input type="text" id="requirement-subject" name="subject"></div>--}}
        {{--</div>--}}
        {{--<div class="field-holder">--}}
            {{--<label for="requirement-message">Message</label>--}}
            {{--<div class="input-holder">--}}
                {{--<textarea id="requirement-message" name="requirement"></textarea>--}}
                {{--<p>By submitting this form I agree to <a href="#terms-of-user" class="termsOfUse lightbox">Terms of Use</a></p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<button type="submit">SEND</button>--}}
        {{--{{Form::close()}}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/smooth-scroll.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/star-rating.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/select2-min.js" type="text/javascript" defer></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery.carousel.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery.slideshow.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/placeholder.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/fixed-block.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/lightBox.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/assets/js/jquery-main.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/v2/js/registration.js" type="text/javascript" ></script>--}}
{{--<script src="{{url('/')}}/web-apps/frontend/v2/js/property_detail.js" type="text/javascript"></script>--}}
{{--<script src="{{url('/')}}/assets/js/helper.js" type="text/javascript"></script>--}}
{{--<script src="{{url('/')}}/assets/js/ajax-locations-search.js" type="text/javascript"></script>--}}
{{--</body>--}}
{{--<div id="fb-root"></div>--}}
{{--<script>--}}
    {{--(function(d, s, id) {--}}
        {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
        {{--if (d.getElementById(id)) return;--}}
        {{--js = d.createElement(s); js.id = id;--}}
        {{--js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";--}}
        {{--fjs.parentNode.insertBefore(js, fjs);--}}
    {{--}(document, 'script', 'facebook-jssdk'));--}}
{{--</script>--}}
{{--</html>--}}

<?php
    require_once(resource_path('/views/frontend/partials/upper-content.php'));
?>
             @yield('content')
<?php
    require_once(resource_path('/views/frontend/partials/bottom-content.php'));
?>

