
@section('PriceArea')   
	@include('layouts.productlist',  $planes = \App\Product::whereIn('id',[1,2,3,4])->get())      
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

@section('ServiceArea')
        <!--================Service Area =================-->
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
        <!--================End Service Area =================-->
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


@section('QuestionArea')
 <!--================Question Area =================-->
 <section class="question_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Frequently Asked Questions</h2>
        			<p>The first is a non technical method which requires the use of adware removal software. Download free adware and spyware removal software and use advanced tools  getting infected.</p>
        		</div>
        		<div class="question_inner">
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General Issues</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Support Issues</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Refund Issues</a>
					</div>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div id="accordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Dude You Re Getting A Telescope
										<i class="lnr lnr-chevron-down"></i>
										<i class="lnr lnr-chevron-up"></i>
										</button>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
										Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying. Thousands of words pour out of our mouths each day as our thoughts.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										The Basics Of Buying A Telescope
										<i class="lnr lnr-chevron-down"></i>
										<i class="lnr lnr-chevron-up"></i>
										</button>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
										Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying. Thousands of words pour out of our mouths each day as our thoughts.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Astronomy Binoculars A Great Alternative
										<i class="lnr lnr-chevron-down"></i>
										<i class="lnr lnr-chevron-up"></i>
										</button>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">
									Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying. Thousands of words pour out of our mouths each day as our thoughts.
									</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingfour">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										Do Your Self Realizations Quickly Fade
										<i class="lnr lnr-chevron-down"></i>
										<i class="lnr lnr-chevron-up"></i>
										</button>
									</div>
									<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
									<div class="card-body">
									Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying. Thousands of words pour out of our mouths each day as our thoughts.
									</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingfive">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
										Astronomy Binoculars A Great Alternative
										<i class="lnr lnr-chevron-down"></i>
										<i class="lnr lnr-chevron-up"></i>
										</button>
									</div>
									<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
									<div class="card-body">
									Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying. Thousands of words pour out of our mouths each day as our thoughts.
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Question Area =================-->

@endsection

@section('ServiceFeatureArea')
 <!--================Feature Area =================-->
 <section class="service_area service_white p_120">
        	<div class="container">
        		<div class="main_title">
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




@section('AboutusWelcomeArea')
 <!--================AboutusWelcome Area =================-->
 <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_img">
        					<img class="img-fluid" src="img/welcome-1.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>Welcome to Hosthub Hosting</h4>
        					<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
        					<div class="row">
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$2.5M</h4>
        								<p>Total Donation</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1465</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>3965</h4>
        								<p>Total Volunteers</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<p class="ab_single_text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
@endsection