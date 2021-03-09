@if (LaravelLocalization::getCurrentLocale() == 'ar')
    @php
    $dir   = 'rtl';
    $text  = 'text-right';
    $inverse_text  = 'text-left';
    $lang  = 'ar';
    @endphp
@elseif (LaravelLocalization::getCurrentLocale() == 'en')  
    @php
    $dir    = 'ltr';
    $text   = '';
    $inverse_text  = 'text-right';
    $lang   = 'en';
    @endphp
@endif

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
 						<h6>{{__('core.ABT-t1')}}</h6>
 						<h2>{{__('core.ABT-d1')}}</h2>
 					</div>
 				</div>
 			</div>
 			<div class="contact-us-wrapper">
 				<div class="row no-gutters">
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-map-marker"></i></span></div>
 							<h5>{{__('core.ABT-c1-t')}}</h5>
 							<p>{{__('core.ABT-c1-d1')}}<br>{{__('core.ABT-c1-d2')}}</p>
 							
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-clock"></i></span></div>
 							<h5>{{__('core.ABT-c2-t')}}</h5>
 							<p>{{__('core.ABT-c2-d1')}}<br>{{__('core.ABT-c2-d2')}}</p>
 						
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-mobile"></i></span></div>
 							<h5>{{__('core.ABT-c3-t')}}</h5>
 							<p>{{__('core.ABT-c3-d1')}}<br>{{__('core.ABT-c3-d2')}}</p>

 						</div>
 					</div>
 					<div class="col-lg-3 col-md-6 col-12">
 						<div class="contact-us-inner">
 							<div class="info-i"><span><i class="las la-envelope"></i></span></div>
 							<h5>{{__('core.ABT-c4-t')}}</h5>
 							<p>{{__('core.ABT-c4-d1')}}</p>
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
 							<h6>{{__('core.ABT-t2')}}</h6>
 							<h2>{{__('core.ABT-d2')}}</h2>
 						</div>
 						<div class="contact-form" dir="{{$dir}}" lang="{{$lang}}" >
 							<form class="contact_form">
 								 @csrf
 								<div class="row">
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="text" name="name" placeholder="{{__('core.ABT-frm-f1')}}" dir="{{$dir}}" lang="{{$lang}}" required>
 									</div>
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="email" name="email" placeholder="{{__('core.ABT-frm-f2')}}" dir="{{$dir}}" lang="{{$lang}}"  required>
 									</div>	
 									<div class="col-lg-6 col-md-6 col-12" >
 										<input type="number" name="phone" placeholder="{{__('core.ABT-frm-f3')}}" dir="{{$dir}}" lang="{{$lang}}"  required>
 									</div>
 									<div class="col-lg-6 col-md-6 col-12">
 										<input type="text" name="subject" placeholder="{{__('core.ABT-frm-f4')}}" dir="{{$dir}}" lang="{{$lang}}"  required>
 									</div>
 									<div class="col-lg-12">
 										<textarea name="message" id="message" cols="30" rows="10" placeholder="{{__('core.ABT-frm-f5')}}" dir="{{$dir}}" lang="{{$lang}}"  required></textarea>
 									</div>
 									<div class="col-lg-12 col-md-6 col-12 text-center">
 										<button class="main-btn">{{__('core.ABT-frm-btn')}}</button>
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