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
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
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
								<li class="nav-item <?= (Route::is('about')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('about') }}">About</a></li> 
								<li class="nav-item <?= (Route::is('service')) ? 'active' : '' ?>"><a class="nav-link" href="{{ Route('service') }}">Services</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="{{ Route('features') }}">Features</a>
										<li class="nav-item"><a class="nav-link" href="{{ Route('pricing') }}">Pricing</a> 
										<li class="nav-item"><a class="nav-link" href="{{ Route('elements') }}">Elements</a></li>
									</ul>
								</li> 
								<?php /*<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> */ ?>

								<li class="nav-item"><a class="nav-link" href="{{ Route('contact') }}">Contact</a></li>
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

<?php
$myArray = array('data' => 'data');
?>

@if(Route::is('home'))
    @yield('HomeBannerArea')
@else
    @yield('OtherBannerArea')
@endif

@section('FeatureArea')
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">	
        		<div class="main_title">
        			<h2>Some Features that Made us Unique</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power of the Internet is becoming more common due to rapid advancement.</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power of the Internet is becoming more common due to rapid advancement.</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power of the Internet is becoming more common due to rapid advancement.</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power of the Internet is becoming more common due to rapid advancement.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
@endsection

@section('PriceArea')     
        <!--================Price Area =================-->
        <section class="price_area p_120">
        	<div class="container">	
        		<div class="main_title">
        			<h2>Choose Your Best Pricing Plans</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        		</div>
        		<div class="price_inner row m0">
        			<div class="col-lg-3 col-sm-6 p0">
        				<div class="price_item">
        					<div class="price_text">
        						<h3>Basic</h3>
								<h5>Individuals/Freelancers</h5>
								<h2>£39<span>/mo</span></h2>
								<ul class="list">
									<li><a href="#">RAM 1 GB</a></li>
									<li><a href="#">Core CPU 1</a></li>
									<li><a href="#">SSD Storage 20 GB</a></li>
									<li><a href="#">Transfer 1 TB</a></li>
									<li><a href="#">Network In 40 Gb</a></li>
								</ul>
        					</div>
        					<a class="price_btn" href="#">Get Started</a>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6 p0">
        				<div class="price_item">
        					<div class="price_text">
        						<h3>Starter</h3>
								<h5>Small Companies</h5>
								<h2>£59<span>/mo</span></h2>
								<ul class="list">
									<li><a href="#">RAM 2 GB</a></li>
									<li><a href="#">Core CPU 2</a></li>
									<li><a href="#">SSD Storage 50 GB</a></li>
									<li><a href="#">Transfer 1 TB</a></li>
									<li><a href="#">Network In 40 Gb</a></li>
								</ul>
        					</div>
        					<a class="price_btn" href="#">Get Started</a>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6 p0">
        				<div class="price_item">
        					<div class="price_text">
        						<h3>Business</h3>
								<h5>Medium Companies</h5>
								<h2>£79<span>/mo</span></h2>
								<ul class="list">
									<li><a href="#">RAM 4 GB</a></li>
									<li><a href="#">Core CPU 4</a></li>
									<li><a href="#">SSD Storage 75 GB</a></li>
									<li><a href="#">Transfer 2 TB</a></li>
									<li><a href="#">Network In 80 Gb</a></li>
								</ul>
        					</div>
        					<a class="price_btn" href="#">Get Started</a>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6 p0">
        				<div class="price_item">
        					<div class="price_text">
        						<h3>Enterprise</h3>
								<h5>Large Companies</h5>
								<h2>£99<span>/mo</span></h2>
								<ul class="list">
									<li><a href="#">RAM 8 GB</a></li>
									<li><a href="#">Core CPU 8</a></li>
									<li><a href="#">SSD Storage 100 GB</a></li>
									<li><a href="#">Transfer 2 TB</a></li>
									<li><a href="#">Network In 100 Gb</a></li>
								</ul>
        					</div>
        					<a class="price_btn" href="#">Get Started</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Price Area =================-->
@endsection

@section('SolutionArea')
        <!--================Solution Area =================-->
        <section class="solution_area p_120">
        	<div class="container">
        		<div class="solution_inner">
        			<h4>Looking for a Custom Solution?</h4>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        			<a class="white_btn" href="#">Request Free Consultation</a>
        		</div>
        	</div>
        </section>
        <!--================End Solution Area =================-->
@endsection

@section('ClientSaysArea')
        <!--================Client Says Area =================-->
        <section class="client_says_area p_120">
        	<div class="container">
        		<div class="row client_says_inner">
        			<div class="col-lg-4">
        				<div class="says_left">
        					<h3>What our Client’s Say about us</h3>
        					<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="says_item">
        					<h4>Nellie Vega</h4>
        					<h5>Head of Marketing, Apple Inc.</h5>
        					<p>“The following article covers a topic that has recently moved to center stage at least it seems that way. If you’ve been”</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="says_item"> 
        					<h4>Estelle Andrews</h4>
        					<h5>Head of Marketing, Apple Inc.</h5>
        					<p>“The following article covers a topic that has recently moved to center stage at least it seems that way. If you’ve been”</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Client Says Area =================-->
@endsection

@section('FeatureArea')
        <!--================Feature Area =================-->
        <section class="service_area p_120">
        	<div class="container">
        		<div class="main_title white">
        			<h2>Top Services We Provided</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        		</div>
        		<div class="row service_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-cloud"></i>Cloud Hosting</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-earth"></i>Web Hosting</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-screen"></i>Cloud Computing</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-inbox"></i>VPS Hosting</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-chart-bars"></i>Server Analytics</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<h4><i class="lnr lnr-lighter"></i>Data Mining</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
@endsection

@section('LatestBlogArea')
        <!--================Latest Blog Area =================-->
        <section class="latest_grid_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Latest Posts from Our Blog</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        		</div>
        		<div class="row l_blog_inner">
        			<div class="col-lg-4">
        				<div class="l_blog_item">
        					<h6>10 April, 2018</h6>
        					<a href="#"><h4>Benjamin Franklin S Method Of Habit Formation</h4></a>
        					<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
        					<div class="view_text">
        						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>4.5k Views</a>
        						<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i>07</a>
        						<a href="#"><i class="fa fa-share" aria-hidden="true"></i>362</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="l_blog_item">
        					<h6>10 April, 2018</h6>
        					<a href="#"><h4>Benjamin Franklin S Method Of Habit Formation</h4></a>
        					<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
        					<div class="view_text">
        						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>4.5k Views</a>
        						<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i>07</a>
        						<a href="#"><i class="fa fa-share" aria-hidden="true"></i>362</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="l_blog_item">
        					<h6>10 April, 2018</h6>
        					<a href="#"><h4>Benjamin Franklin S Method Of Habit Formation</h4></a>
        					<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
        					<div class="view_text">
        						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>4.5k Views</a>
        						<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i>07</a>
        						<a href="#"><i class="fa fa-share" aria-hidden="true"></i>362</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
@endsection

@section('ClientsLogoArea')
        <!--================Clients Logo Area =================-->
        <section class="clients_logo_area p_120">
        	<div class="container">
        		<div class="clients_slider owl-carousel">
        			<div class="item">
        				<img src="img/clients-logo/c-logo-1.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-2.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-3.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-4.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-5.png" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Clients Logo Area =================-->
@endsection

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
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>