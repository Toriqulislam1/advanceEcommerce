@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<body>



</section>
<section class="hero-slider hero-style" >
	  <div id="particles-js">
         <div class="swiper-container">
            <!-- start swiper-wrapper -->
             <div class="swiper-wrapper">  
                <!--slider 1 start -->
               <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image" >
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Software Development</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>The perfect resource for beginner-to-advanced digital marketers looking to learn new skills or hone existing ones</p>
                         </div>
                         <div class="clearfix"></div>
                        
                      </div>
                   </div>                 
                </div>
                   <!--slider 1 end -->               
                  <!--slider 2 start -->
                <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image" ">
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Digital Marketing</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>The perfect resource for beginner-to-advanced digital marketers looking to learn new skills or hone existing ones</p>
                         </div>
                         <div class="clearfix"></div>
                        
                      </div>
                   </div>                 
                </div>
                   <!--slider 2 end --> 
				<!--slider 3 start -->
                <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image">
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Website Design & Development</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>Our web experiences are high-performing, feature-packed and digitally transformative, designed to be user-friendly, fully functional, very secure and able to scale as your enterprise grows. </p>
                         </div>
                         <div class="clearfix"></div>
                         
                      </div>
                   </div>                 
                </div>
                   <!--slider 3 end -->     
				   
             </div>
             <!-- end swiper-wrapper --> 
             <!-- swipper controls -->     
             <div class="swiper-pagination"></div>       
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
              <!-- swipper controls -->  
          </div>
		     </div>
      </section>
	
      <!--End Hero Slider-->

	  
		<!--End Hero-->

		@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp
	<div class="container">
		
		<div class="weworkfor pt20 pb20 dark-bg2">
			<div class="container">
			
				<div class="logo-weworkfor owl-carousel">
				@foreach($clients as $item)
					<div class="items"><img src="{{ asset($item->client_logo)}}" alt="clients" class="img100w"></div>
					@endforeach
				</div>
				
			</div>
		</div>
	
		</div>
	  
	 
	  
	<!--Start Service-->
	<section class="dg-service2 pb120 pt0" id="services">
		<div class="container">
		<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="common-heading ptag">
									<span>Service</span>
									<h2>Our Services</h2>
									
								</div>
							</div>
						</div>
			<div class="row upset ">
			
			@php
		$services = App\Models\Services::orderBy('content_title','desc')->limit(8)->get();
		@endphp

			@foreach($services as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor pt20">
						<div class="nn-card-set">
						<a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
							<div class="card-icon"><img src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
							<h4>{{ $item->content_title}}</h4>
							
							Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			
			</div>
		</div>
		<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{route('all-services')}}" class="btn-outline">View More Services<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
	</section>
	 

	<!--End Service-->
	<!--Start gallery -->
<section class="dg-portfolio-section pb120 pt120">
<div class="container">
<div class="row justify-content-center ">
<div class="col-lg-8">
<div class="common-heading-2">
	<span class="text-effect-1">Photo gallery</span>
	<h2 class="mb0">Some of photos</h2>
</div>
</div>
</div>
<div class="row">
	
@php
$gallery = App\Models\Gallery::orderBy('id','desc')->get();
@endphp


@foreach($gallery as $item)
<div class="col-lg-3 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
<div class="isotope_item h-scl-">
	<div class="item-image h-scl-base">
		<a href="#"><img src="{{ asset($item->gallery) }}" alt="portfolio" class="img-fluid"/> </a>
	</div>
	
</div>
</div>
@endforeach





</div>
</div>
<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="javascript:void(0)" class="btn-outline">View More Photos<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
</section>
<!--End gallery-->
	<!--why choose-->
		<section class="why-choos-lg pad-tb deep-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="common-heading text-l">
							<span>Why Choose Us</span>
							<h2 class="mb20">Why The Technoval <span class="text-second text-bold">Ranked Top</span> Among The Leading IT Companies</h2>
							
							<div class="itm-media-object mt40 tilt-3d">
								<div class="media">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/delivered.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We Ensure Right time delivery </h4>
										
									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/rating.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>Expart team members</h4>
										
									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/insurance.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We care your product & time</h4>
										
									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/recruitment.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We research for latest technology</h4>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ asset('frontend/assets/images/about/about-company.jpg')}}" alt="image" class="img-fluid"></div>
						<!--p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p-->
						<div class="cta-card mt60 text-center">
							<h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
							
							<a href="#" class="btn-outline lnk mt30">Request A Quote    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End why choose-->
	
	<section class="about-dg-busign pb120 pt120 bg-light-ylo upset" id="about">
	<div class="up-curvs"><svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff">
<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z"/>
</svg>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6 v-center">
<div class="common-heading-2 text-l">
<span class="text-effect-1">About Us</span>
<h2 class="mb20">Work Together For Success</h2>
<p>Established in 2016 under the private limited company act of Bangladesh with an aim to serve globally. Technoval already achieved the trust of different clients from different regions on serving quality services in terms of time and cost and has a strong belief to provide better and better services in the coming days.</p>
</div>
</div>
<div class="col-lg-6 v-center">
<img src="{{ asset('frontend/assets/images/about/about-07-final.png')}}" alt="img" class="img-fluid">
</div>
<div class="col-lg-6 v-center mt40 order2">
<img src="{{ asset('frontend/assets/images/about/home-image-03-final.jpg')}}" alt="img" class="img-fluid">
</div>
<div class="col-lg-6 v-center mt40 order1">
<div class="common-heading-2 text-l">
<span class="text-effect-1">We Are Creative Agency</span>
<h2 class="mb20">We Craft Beautiful Digital Experiences</h2>
<p>Tecnoval evolved from a local digital-first marketing company to offering an integrated mix of strategy, analytics, creativity, technology, media and experience to drive meaningful innovation in communication through multi-country presence. With one of the largest client portfolios, Tecnoval is a true integrated marketing company empowered by a world class technology team able to offer any solution for any brand across different media.</p>
</div>
</div>
</div>
</div>
<div class="bottom-curvs">
<svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff" >
<path d="M1919.5-0.5H-0.5c0,0,0,90,0,90c114.9-4.8,228.6-17.9,343.6-24.6c118.6-7,237.4-11.9,356.1-14.7
c237.6-5.7,475.3-3.1,712.7,7.7c164.2,7.5,328.1,23.7,492.3,31c0.7,0,15.2,0.5,15.2,0.6C1919.5,89.5,1919.5-0.5,1919.5-0.5z"/>
</svg>
</div>
</section>


<!--Start Portfolio-->
		<section class="portfolio-section pad-tb" id="work">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-lg-8">
						<div class="common-heading">
							<span>Our Work</span>
							<h2 class="mb20">Our Latest Creative Work</h2>
						</div>
					</div>
				</div>
				<div class="row">

@php
$portfolios = App\Models\Portfolio::orderBy('id','desc')->get();
@endphp

		@foreach($portfolios as $item)
					<div class="col-lg-3 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
						<div class="isotope_item up-hor">
							<div class="item-image">
								<a href="#"><img src="{{ asset($item->port_image)}}" alt="image" class="img-fluid" /> </a>
							</div>
							<div class="item-info-div shdo">
								<h4>{{ $item->port_title}}</h4>
								<p>{{ $item->port_subtitle}}</p>
							</div>
						</div>
					</div>
		@endforeach
					
					
					
					
				</div>
			</div>
		</section>
		<!--End Portfolio-->
	

	
		<!--Start work-category-->
		<section class="work-category pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							<span>We Have Worked Across Multiple Industries</span>
							<h2>Industries We Serve</h2>
							
						</div>
					</div>
				</div>
				<div class="row mt30">
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/house.svg')}}" alt="img"> <h6>Real estate</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/travel-case.svg')}}" alt="img"> <h6>Tour &amp; Travels</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/video-tutorials.svg')}}" alt="img"> <h6>Education</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/taxi.svg')}}" alt="img"> <h6>Transport</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/event.svg')}}" alt="img"> <h6>Event</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/smartphone.svg')}}" alt="img"> <h6>eCommerce</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/joystick.svg')}}" alt="img"> <h6>Game</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/healthcare.svg')}}" alt="img"> <h6>Healthcare</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/money-growth.svg')}}" alt="img"> <h6>Finance</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/baker.svg')}}" alt="img"> <h6>Restaurant</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/mobile-app.svg')}}" alt="img"> <h6>On-Demand</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/groceries.svg')}}" alt="img"> <h6>Grocery</h6> </div></div></div>
				</div>
			</section>
			<!--End  work-category-->
</body>

            @endsection