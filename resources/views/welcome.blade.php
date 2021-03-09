
@extends('layouts.app')


@section('content')

    <!-- Hero Area -->
 	<div class="homepage-slides owl-carousel">

        <div class="single-slide-item" style="background-image: url({{ asset('front_assets/img/cover.jpg') }});">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                               <h1>{{__('core.H-sld-t1')}}<br> <b>{{__('core.H-sld-t2')}}</b>{{__('core.H-sld-t3')}}</h1>
                               <p>{{__('core.H-sld-d1')}}<br>{{__('core.H-sld-d2')}}</p>
                            </div>
                            <a href="#" class="main-btn">{{__('core.H-sld-b')}}</a>
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
									<img src="{{ asset('front_assets/img/car.svg') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>Car</h5>
									<p>Track your car using our easy to use apps.</p>
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
									<img src="{{ asset('front_assets/img/moto.svg') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>Motorcycle</h5>
									<p>Track your car using our easy to use apps.</p>
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
									<img src="{{ asset('front_assets/img/truck.svg') }}" alt="">
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-12">
								<div class="feat-content">
									<h5>Truck</h5>
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
							<h6>{{__('core.H-abt-t')}}</h6>
							<h2>{{__('core.H-abt-d1')}}<b>{{__('core.H-abt-d2')}}<br>{{__('core.H-abt-d3')}}</b>{{__('core.H-abt-d4')}}</h2>
						</div>
						<p>{{__('core.H-abt-d5')}}</p>
						<p class="highlight">{{__('core.H-abt-p1')}}</p>
						<p class="highlight">{{__('core.H-abt-p2')}}</p>
						<p class="highlight">{{__('core.H-abt-p3')}}</p>

						<div class="row founded">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="years"><span>10</span>{{__('core.H-abt-btm1')}}</div>
							</div>
							<div class="col-lg-8 col-md-6 col-12">
								<div class="text">{{__('core.H-abt-btm2')}}</div>
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
						<h6>{{__('core.H-fts-t')}}</h6>
						<h2>{{__('core.H-fts-d1')}}<br><b>{{__('core.H-fts-d2')}}</b></h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".2s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/location.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c1-t')}}</h4>
						<p>{{__('core.H-fts-c1-d')}}</p>
		
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".4s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/mic.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c2-t')}}</h4>
						<p>{{__('core.H-fts-c2-d')}}</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".6s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/poweroff.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c3-t')}}</h4>
						<p>{{__('core.H-fts-c3-d')}}</p>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".2s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/speed.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c5-t')}}</h4>
						<p>{{__('core.H-fts-c5-d')}}</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".4s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/battery.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c7-t')}}</h4>
						<p>{{__('core.H-fts-c7-d')}}</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".6s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/stolen.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c6-t')}}</h4>
						<p>{{__('core.H-fts-c6-d')}}</p>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".4s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/fuel.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c8-t')}}</h4>
						<p>{{__('core.H-fts-c8-d')}}</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-service-area mt-30 wow fadeInLeft" data-wow-delay=".6s">
						<div class="service-icon">
							<img src="{{ asset('front_assets/img/safety.svg') }}" alt="" class="h-40">
						</div>
						<h4>{{__('core.H-fts-c9-t')}}</h4>
						<p>{{__('core.H-fts-c9-d')}}</p>
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
						<h6>{{__('core.H-prd-t')}}</h6>
						<h2>{{__('core.H-prd-d1')}}  
							<b>{{__('core.H-prd-d2')}}</b> 
							{{__('core.H-prd-d3')}}  
							<b>{{__('core.H-prd-d4')}}</b>
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
                <h3>{{__('core.H-app-t')}}</h3>
                <p>{{__('core.H-aap-d')}}</p>
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
	<div class="faq-area section-padding" id="faq">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 mt-40 wow fadeInRight" data-wow-delay=".4s">
					<div class="section-title text-center">
						<h6>{{__('core.H-faq-t')}}</h6>
						<h2>{{__('core.H-faq-d1')}} <b>{{__('core.H-faq-d2')}}</b></h2>
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