
@extends('layouts.app')


@section('content')



 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>TK303</h1>
                        <h6><a href="{{route('welcome')}}">{{__('core.HOME')}}</a> / <a href="{{route('products')}}">{{__('core.PRODUCTS')}}</a> / TK303</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Details -->

    <div id="service-page" class="service-details-section section-padding pb-0">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="single-service">
                        <img class="d-flex m-auto" src="{{ asset('front_assets/img/tk303.png') }}" alt="TK303">
                        <h2>Description:</h2>
                        <p>One of the most important features of GBS satellite tracking devices, as they work on ways to protect cars from theft, by providing you with all the data related to your car, the exact location of the car and specified by date and time.</p>
                        
                        <p>TK303 works based on existing GSM / GPRS network and systems and GPS satellites. With this device you can set multiple functions for security, tracking, monitoring, emergency alarms and management.</p>
                        
                        <h2>Features:</h2>
                        <hr>

                        <h5>You can control the stopping and starting of the car remotely:</h5>
                        <p>This feature enables you to control your car remotely, so that you can stop your car, by cutting off the fuel connection to the car, as the TK303 stops your car and sends you alert notifications.</p>
                        
                        
                        <h5>Supports strong 450mA / h battery:</h5>
                        <p>The TK303 features a high-capacity Li-ion battery that also includes an adequate power supply to the vehicle.</p>
                        
                        
                        <h5>Equipped with ACC detection of ignition status:</h5>
                        <p>The TK303 has a feature that detects ignition conditions and sends you alerts before they happen, making you able to protect your car from the dangers of fires.</p>
                        
                        
                        <h5>Supports emergency SOS calls:</h5>
                        <p>TK303 allows you to make emergency calls in critical situations, by pressing the thumb-sized button on the device for this feature.</p>
                        
                        
                        <h5>Equipped with configurable tracking modes:</h5>
                        <p>Where the device determines the location of a distance that is made by uploading a site after a fixed distance, a specified interval, and a specific angle.</p>
                        
                       
                        
                        <h5>Supports multiple alarms:</h5>
                        <p>As the vehicle tracker sends instant alerts in cases of vibration, overspeed, or an alarm to shut down your car, and the geofence system around your car.</p>
                        
                       
                        
                        <h5>SMS tracking systems are supported:</h5>
                        <p>The TK303 sends sms via the Internet or your tablet device, as it informs you of the location of your car at the same time for all the different interfaces that you follow, and it also informs you immediately of any malfunctions or an attempt to steal your car.</p>
                        
                       
                        
                        <h5>There is a sound monitoring system:</h5>
                        <p>Which enables to listen to the areas around the place of the car, and record everything that is going on inside the car and know what is going on in it.</p>
                        
                       
                        
                        <h5>Know the car route:</h5>
                        <p>Where the tracking device allows you to know the route of your cars from where they were and to where they went, and it also enables you to know the route for them during the last three months.</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')


@endsection