 @extends('layouts.app')


@section('content')



 	<div class="quotation-section bg-cover section-padding">
 		<div class="overlay-2"></div>
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-8 offset-lg-2 text-center">
 					<div class="section-title">
 						<h6>Quotation</h6>
 						<h2>Get Free<b> Quotation</b> for <br>Your <b>Choice</b></h2>
 					</div>
 				</div>
 			</div>
 			<div class="quotation-block">
 				<form class="enterprise_form">
 					@csrf
 					<div class="row">
 						<div class="col-lg-6 col-sm-6">
 							<div class="form-group">
 								<label for="name">Name</label>
 								<input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
 							</div>
 						</div>
 						<div class="col-lg-6 col-sm-6">
 							<div class="form-group">
 								<label for="email">Email</label>
 								<input type="email"  name="email" class="form-control" id="email" placeholder="Email" required>
 							</div>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-lg-6">
 							<div class="form-group">
 								<label>Company Name</label>
 								<input type="text" name="company" class="form-control" id="company" placeholder="Company Name" required>
 							</div>
 						</div>
 						<div class="col-lg-6">
 							<div class="form-group">
 								<label for="phone">Phone No.</label>
 								<input type="number"  name="phone" class="form-control" id="phone" placeholder="Phone No." required>
 							</div>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-lg-8">
 							<div class="form-group">
 								<label>Number Of Devices</label>
 								<input type="number" name="device_num" required>
 							</div>
 						</div>
 						<div class="col-lg-4">
 							<div class="request-button">
 								<button type="submit" class="main-btn">Send Request<i class="las la-arrow-right"></i></button>
 							</div>
 						</div>
 					</div>

 				</form>
 				<div class="quotation-dtl text-white">
 					<p><i class="las la-mobile"></i>We are available at Mon-Fri call us + 212-4000-300 during regular business hours</p>
 				</div>
 			</div>
 		</div>
 	</div>



@endsection


@section('script')


@endsection