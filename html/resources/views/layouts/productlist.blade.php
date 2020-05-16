
<?php
$planes = isset($planes) ? $planes : \App\Product::all();

?>
<section class="price_area p_120">
        	<div class="container">	
        		<div class="main_title">
        			<h2>Choose Your Best Pricing Plans</h2>
        			
        		</div>
        		<div class="price_inner row m0">

                @foreach($planes as $service)
        			<div class="col-lg-3 col-sm-6 p0">
        				<div class="price_item">
        					<div class="price_text">
        						<h3>{{ $service->name }}</h3>
								<h5>{{ $service->description }}</h5>
								<h2>{{ $service->price }} INR <span>/ {{ $service->cycle }}</span></h2>
								<ul class="list">
                                @foreach($service->property as $property)
									<li><a href="#">{{ $property->keys }} {{ $property->value }}</a></li>
                                @endforeach
								</ul>
        					</div>
        					<a class="price_btn" href="{{ url('pay/'.$service->id)}}">Get Started</a>
        				</div>
        			</div>
                @endforeach

        			
        		</div>
        	</div>
        </section>
        <!--================End Price Area =================-->