<!doctype html>
<html lang="en">
    <head>
        <base href="{{url('')}}" >  
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Hosthub Hosting Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
       
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <!-- <link rel="stylesheet" href="{{ url('css/all.css') }}"> -->
<?php /*
        <!-- MINIFY LARAMIX FILE -->
        <link rel="stylesheet" href="app/css/bootstrap.css">
        <link rel="stylesheet" href="app/css/style.css">
        <link rel="stylesheet" href="app/css/font-awesome.min.css">
        <link rel="stylesheet" href="app/css/owl.carousel.min.css">
        <link rel="stylesheet" href="app/css/simpleLightbox.css">
        <link rel="stylesheet" href="app/css/nice-select.css">
        <link rel="stylesheet" href="app/css/animate.css">
        <link rel="stylesheet" href="app/css/style.css">
        <link rel="stylesheet" href="app/css/responsive.css">
        <link rel="stylesheet" href="app/css/style.css">
*/ ?>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container box_1620">
					<div class="float-left">
						<a href="tel:{{ env('TEL','+0000') }}">{{ env('TEL','+0000') }}</a>
						<a href="mailto:{{ env('SUPPORT_EMAIL','hoststudioz@gmail.com') }}">{{ env('SUPPORT_EMAIL','hoststudioz@gmail.com') }}</a>
					</div>
					
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item <?= (Route::is('home')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('home') }}">Home</a></li> 
								<!-- <li class="nav-item <?= (Route::is('about')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('about') }}">About</a></li>  -->
								<li class="nav-item <?= (Route::is('service')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('service') }}">Services</a></li> 
								<li class="nav-item <?= (Route::is('pricing')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('pricing') }}">Pricing</a></li> 
								
								<?php /*<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="{{ Route('features') }}">Features</a>
										<li class="nav-item"><a class="nav-link" href="{{ Route('pricing') }}">Pricing</a> 
										<li class="nav-item"><a class="nav-link" href="{{ Route('elements') }}">Elements</a></li>
									</ul>
								</li>  */ ?>
								<?php /*<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> */ ?>

								<li class="nav-item <?= (Route::is('contact')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('contact') }}">Contact</a></li>
                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
							</ul>
                            
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
@section('HomeBannerArea')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row banner_content">
						<div class="col-lg-5">
							<h2>We’re Web Hosting <br /> Professionals</h2>
							<p>We provide Cloud solution, VPN solution for your business and budget Hosting for your small business website with heigh Security Environment</p>
							<a class="banner_btn" href="#">Explore Our Features</a>
						</div>
						<div class="col-lg-7">
							<div class="banner_map_img">
								<img src="img/banner/banner-map.png" alt="">
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
@endsection  

@section('OtherBannerArea')
	<section class="banner_area">
				<div class="banner_inner d-flex align-items-center">
					<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-28.908px);"></div>
					<div class="container">
						<div class="banner_content text-center">
							<div class="page_link">
								<a href="{{ Route('home')}}">Home</a>
								<a href="{{ Route::currentRouteName() }}"> {{ strtoupper(Route::currentRouteName()) }}</a>
							</div>
							<h2> {{ strtoupper(Route::currentRouteName()) }} </h2>
						</div>
					</div>
				</div>
	</section>
@endsection

@if(Route::is('home'))
    @yield('HomeBannerArea')
@else
    @yield('OtherBannerArea')
@endif



@yield('content')


        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Top Products</h6>
                            <ul class="list">
                            	<li><a href="#">Managed Website</a></li>
                            	<li><a href="#">Manage Reputation</a></li>
                            	<li><a href="#">Power Tools</a></li>
                            	<li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget news_widgets">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn">Subscribe</button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php /* <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	*/ ?>
                    
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script> -->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <!-- <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script> -->
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script> 
        <!-- <script src="{{ url('js/all.js') }}"></script> -->

        <script type="text/javascript">
        $(window).on('load',function(){
                $('#myModal').modal('show');
            });
        </script>
    </body>
</html>