
@extends('layouts.app')


@section('content')



 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="breadcroumb-title">
 						<h1>Contact</h1>
 						<h6><a href="index.html">Home</a> / Contact</h6>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Contact Area -->

 	<div id="contact-us" class="contact-us-area section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="offset-lg-2 col-lg-8 text-center">
 					<div class="section-title">
 						<h6>Contact Us</h6>
 						<h2>Don't hesitate to<b> contact</b> <br>for get <b>Information</b></h2>
 					</div>
 				</div>
 			</div>
 			<div class="contact-us-wrapper">
 				<div class="row no-gutters">
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-map-marker"></i></span></div>
 							<h5>Office Location</h5>
 							<p>66 Broklyn Streat <br>New York, USA</p>
 							<a href="">Find us on map</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-clock"></i></span></div>
 							<h5>Office Hour</h5>
 							<p>Monday-Friday <br>08.00-20.00</p>
 							<a href="">Get Direction</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-mobile"></i></span></div>
 							<h5>Phone Number</h5>
 							<p>(+1)212-946-2064 <br>(+3)112-976-2067</p>
 							<a href="">Call Now</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-envelope"></i></span></div>
 							<h5>E-mail Address</h5>
 							<p>info@expoint.com<br>info@webmail.com</p>
 							<a href="">Mail Us</a>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Contact Form -->

 	<div id="contact-page" class="contact-section bg-cover section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12 col-md-12 col-12 text-center wow fadeInRight">
 					<div class="contact-form-wrapper mt-100">
 						<div class="section-title">
 							<h6>Stay with Us</h6>
 							<h2>Get in <b>Touch</b></h2>
 						</div>
 						<div class="contact-form">
 							<form class="contact_form">
 								 @csrf
 								<div class="row">
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="text" name="name" placeholder="Your Name" required>
 									</div>
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="email" name="email" placeholder="E-mail" required>
 									</div>	
 									<div class="col-lg-6 col-md-6 col-12" >
 										<input type="number" name="phone" placeholder="Phone Number" required>
 									</div>
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="text" name="subject" placeholder="Subject" required>
 									</div>
 									<div class="col-lg-12">
 										<textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message" required></textarea>
 									</div>
 									<div class="col-lg-12 col-md-6 col-12 text-center">
 										<button class="main-btn">Get A Quote</button>
 									</div>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>





@endsection


@section('script')


@endsection