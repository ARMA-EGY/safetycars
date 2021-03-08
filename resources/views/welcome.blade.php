
@extends('layouts.app')


@section('content')

    <!-- Hero Area -->
 	<div class="homepage-slides owl-carousel">

        <div class="single-slide-item" style="background-image: url({{ asset('front_assets/img/cover.webp') }});">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                               <h1>Best Solutions for<br> <b>Car Security</b> Services</h1>
                               <p> Our Devices provide a full solution to keep your vehicle safe all the time.<br>By Protecting you and all types of vehicles from theft.</p>
                            </div>
                            <a href="#" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Feature Section -->
	<div class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-feature-item">
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-12 col-12">
								<div class="feat-icon">
									<img src="{{ asset('front_assets/img/icon/business.png') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>Flat Rate Fees</h5>
									<p>It is a long established fact that and reader will by the readable based.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-feature-item">
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-12 col-12">
								<div class="feat-icon">
									<img src="{{ asset('front_assets/img/icon/24-hours.png') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>24/7 Tracking</h5>
									<p>Stay secured around the clock by tracking your vehicle anytime.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-feature-item">
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-12 col-12">
								<div class="feat-icon">
									<img src="{{ asset('front_assets/img/icon/bounce-rate.png') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>Easy Tools</h5>
									<p>Track your car using our easy to use apps.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Section-->
	<div class="about-area section-padding pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
					<div class="info-content-area">
						<div class="section-title">
							<h6>About Us</h6>
							<h2>We're leading <b>Vehicle <br>Tracking Service</b> in Egypt</h2>
						</div>
						<p>We successively delivered high quality vehicle tracking devices working in Egypt.</p>
						<p class="highlight">More than 10 years of experience in vehicle security devices.</p>
						<p class="highlight">We always provide flexible & smart solutions. </p>
						<p class="highlight">Unique latest machinary used the Logistics project.</p>

						<div class="row founded">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="years"><span>10</span>Year of Success</div>
							</div>
							<div class="col-lg-8 col-md-6 col-12">
								<div class="text">Since we established in 2010 experience &amp; still a growing protfolio day by day!</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
					<div class="">
						<img src="{{ asset('front_assets/img/about.svg') }}" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Services Area -->
	<div id="service-1" class="services-area bg-cover section-padding" style="background-image: url({{ asset('front_assets/img/features.jpg') }})">
		<div class="overlay-2"></div>
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8 text-center">
					<div class="section-title">
						<h6>FEATURES</h6>
						<h2>Our Devices Come with Various <br><b>Outstanding Features</b></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 mb-50 wow fadeInLeft" data-wow-delay=".2s">
						<div class="service-icon">
							<i class="flaticon-delivery-man"></i>
						</div>
						<h4>Determine the location of the vehicle</h4>
						<p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area service-2 mt-30 mb-50 wow fadeInLeft" data-wow-delay=".4s">
						<div class="service-icon">
							<i class="flaticon-truck"></i>
						</div>
						<h4>Mic to hear what's going on in the car</h4>
						<p>This is a service provided to those who need urgent delivery to be sent and received on the same day.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area service-3 mt-30 mb-50 wow fadeInLeft" data-wow-delay=".6s">
						<div class="service-icon">
							<i class="flaticon-pallet"></i>
						</div>
						<h4>Stop and start the car from your mobile phone</h4>
						<p>This is a service that safely strict delivery and promptly delivers goods on pallets.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area service-4 mt-30 wow fadeInLeft" data-wow-delay=".2s">
						<div class="service-icon">
							<i class="flaticon-fast-delivery"></i>
						</div>
						<h4>Determine the geographical area of the vehicle</h4>
						<p>This courier will usually transport the goods during the night or early of the morning.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area service-5 mt-30 wow fadeInLeft" data-wow-delay=".4s">
						<div class="service-icon">
							<i class="flaticon-air-freight"></i>
						</div>
						<h4>Determine the vehicle speed</h4>
						<p>This is a transport service of goods or documents from one country to another country.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area service-6 mt-30 wow fadeInLeft" data-wow-delay=".6s">
						<div class="service-icon">
							<i class="flaticon-wholesale"></i>
						</div>
						<h4>Warehousing</h4>
						<p>This type of service will involve managed storage solutions to give companies greater control.</p>
						<a href="single-service.html" class="read-more">Read More</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Product Area -->
	<div class="blog-area gray-bg section-padding">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8 text-center">
					<div class="section-title">
						<h6>Our Products</h6>
						<h2>We provide  
							<b> the best services</b> 
							and installation  
							<b>within 24 hours </b>
						</h2>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-blog-item wow fadeInLeft" data-wow-delay=".4s">
						<div class="blog-bg">
							<img src="{{ asset('front_assets/img/gt06n.png') }}" alt="">
						</div>
						<div class="blog-content">
							<h5><a href="#">GT06N </a>
							</h5>
							<p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, facilis perferendis ipsam.</p>
							<a href="#" class="read-more">Read More</a>
						</div>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-blog-item wow fadeInLeft" data-wow-delay=".6s">
						<div class="blog-bg">
							<img src="{{ asset('front_assets/img/tk303.png') }}" alt="">
						</div>
						<div class="blog-content">
							<h5><a href="#">TK303</a></h5>
							<p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, facilis perferendis ipsam.</p>
							<a href="#" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Apps Section-->
	<section class="parallex our-app section-padding-100" style="background-image: url({{ asset('front_assets/img/image-5.jpg') }})">
        <div class="container">
          <div class="row"> 
            <!-- Section Content -->
            <div class="section-content">
              <div class="col-md-5 col-sm-4">
                  <img alt="" class="img-absolute" src="{{ asset('front_assets/img/phone.png') }}">
              </div>
              <div class="col-md-7 col-sm-8 ml-auto">
                <h3>Download Our Tracking App</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua. Lorem ipsum dolor sit amet, eiusmod tempor dolore aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <ul class="list-inline">
                  <li><a href="#" class="btn btn-bordered"><i class="fa fa-apple"></i>iPhone</a></li>
                  <li><a href="#" class="btn btn-bordered"><i class="fa fa-android"></i>Android</a></li>
                  <li><a href="#" class="btn btn-bordered"><i class="fa fa-windows"></i>Windows</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
</section>

	<!-- FAQ Section  -->
	<div class="faq-area section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 mt-40 wow fadeInRight" data-wow-delay=".4s">
					<div class="section-title text-center">
						<h6>Helpful FAQ's</h6>
						<h2>Frequently Asked <b>Questions</b></h2>
					</div>
					<div class="styled-faq">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading active" role="tab" id="headingOne">
									<h6 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											When can I expect my delivery?
											<i class="fa fa-angle-up"></i>
											<i class="fa fa-angle-down"></i>
										</a>
									</h6>
								</div>
								<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
										brunch.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											What is the first possible pick-up date?
											<i class="fa fa-angle-up"></i>
											<i class="fa fa-angle-down"></i>
										</a>
									</h6>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
										brunch.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											How can I pay for the service?
											<i class="fa fa-angle-up"></i>
											<i class="fa fa-angle-down"></i>
										</a>
									</h6>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
										brunch.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading active" role="tab" id="headingSeven">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											How can I collect my parcel in the parcel shop?
											<i class="fa fa-angle-up"></i>
											<i class="fa fa-angle-down"></i>
										</a>
									</h6>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
										brunch.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection


@section('script')


@endsection