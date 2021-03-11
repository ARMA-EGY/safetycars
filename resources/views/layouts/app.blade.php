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


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->

    <meta content='' name='current_path' />
    <meta content='false' name='protect_images' />

    <meta property="og:site_name"     content="Safety Cars"/>


    

    <!--===============================================================================================-->	

    <!-- Author Meta -->
    <meta name="author" content="ARMA SOFTWARE">

 	<!--Favicon-->
 	<link rel="icon" href="{{ asset('front_assets/img/favicon.png') }}" type="image/jpg" />
 	<!-- Bootstrap CSS -->
 	<link href="{{ asset('front_assets/css/bootstrap.min.css') }}" rel="stylesheet">
 	<!-- Font Awesome CSS-->
 	<link href="{{ asset('front_assets/css/font-awesome.min.css') }}" rel="stylesheet">
 	<!-- Line Awesome CSS -->
 	<link href="{{ asset('front_assets/css/line-awesome.min.css') }}" rel="stylesheet">
 	<!-- Animate CSS-->
 	<link href="{{ asset('front_assets/css/animate.css') }}" rel="stylesheet">
 	<!-- Bar Filler CSS -->
 	<link href="{{ asset('front_assets/css/barfiller.css') }}" rel="stylesheet">
 	<!-- Flaticon CSS -->
 	<link href="{{ asset('front_assets/css/flaticon.css') }}" rel="stylesheet">
 	<!-- Owl Carousel CSS -->
 	<link href="{{ asset('front_assets/css/owl.carousel.css') }}" rel="stylesheet">
 	<!-- Style CSS -->
 	<link href="{{ asset('front_assets/css/style.css') }}" rel="stylesheet">
 	<!-- Responsive CSS -->
 	<link href="{{ asset('front_assets/css/responsive.css') }}" rel="stylesheet">
	<!-- Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('front_assets/css/style-ar.css')}}" type="text/css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@900&display=swap" rel="stylesheet">
    @endif


 	<!-- jquery -->
 	<script src="{{ asset('front_assets/js/jquery-1.12.4.min.js') }}"></script>

    <!-- meta character set -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@isset($seo) @if($seo->title != '') {{$seo->title}} @else Safety Cars @endif @else Safety Cars @endisset</title>

    @yield('style')


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<!-- Pre-Loader -->
<div id="loader">
    <div class="loading">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>

<form class="visits_form">
    @csrf
    <input type="hidden" name="ip" value="{{Request::ip()}}">
    <input type="hidden" name="page_token" value="{{$page_token}}">
</form>

            <!-- Header -->
            <header class="header-area" dir="{{$dir}}">
                <div class="sticky-area">
                    <div class="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="logo">
                                        <a class="navbar-brand" href="{{route('welcome')}}">
                                            <img src="{{ asset('storage/'.$logo->logo) }}" alt="">
                                            @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                                <span class="text-dark" style="font-family: 'Kufam', cursive;">سيفتي كار</span>
                                            @elseif (LaravelLocalization::getCurrentLocale() == 'en')  
                                                <span class="text-dark" style="font-family: 'Audiowide', cursive;font-weight: 600;">SAFETY CARS</span>
                                            @endif
                                        </a>
                                    </div>
                                </div>
        
                                <div class="col-lg-3">
                                    
                                </div>
        
                                <div class="col-lg-7">
                                    <div class="main-menu">
                                        <nav class="navbar navbar-expand-lg">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                                <span class="navbar-toggler-icon"></span>
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
        
                                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                                <ul class="navbar-nav ml-auto">
        
                                                    <li class="nav-item">
                                                        <a class="nav-link {{request()->routeIs('welcome') ? 'active' : '' }}" href="{{route('welcome')}}">{{__('core.HOME')}}</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link {{request()->routeIs('products') ? 'active' : '' }}" href="{{route('products')}}">{{__('core.PRODUCTS')}}</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{request()->routeIs('welcome') ? '#faq' : '/#faq' }}">{{__('core.FAQ')}}</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link {{request()->routeIs('enterprise') ? 'active' : '' }}" href="{{route('enterprise')}}">{{__('core.ENTERPRISE')}}</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link {{request()->routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}">{{__('core.CONTACT-US')}}</a>
                                                    </li>
        
                                                    <li class="nav-item" dir="ltr">

                                                        @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                                            <a class="nav-link nav-lang" href="#">
                                                                <img src="{{ asset('front_assets/img/flags/ar.png') }}" style="width: 15px;padding-bottom: 3px;">
                                                            Arabic
                                                                <span class="sub-nav-toggler">
                                                                </span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><img src="{{ asset('front_assets/img/flags/en.png') }}" style="width: 15px;padding-bottom: 3px;"> English</a></li>
                                                                <li><a href="#"><img src="{{ asset('front_assets/img/flags/ar.png') }}" style="width: 15px;padding-bottom: 3px;"> Arabic</a></li>
                                                            </ul>
                                                        @elseif (LaravelLocalization::getCurrentLocale() == 'en')  
                                                            <a class="nav-link nav-lang" href="#">
                                                                <img src="{{ asset('front_assets/img/flags/en.png') }}" style="width: 15px;padding-bottom: 3px;">
                                                            English
                                                                <span class="sub-nav-toggler">
                                                                </span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                <li><a href="#"><img src="{{ asset('front_assets/img/flags/en.png') }}" style="width: 15px;padding-bottom: 3px;"> English</a></li>
                                                                <li><a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><img src="{{ asset('front_assets/img/flags/ar.png') }}" style="width: 15px;padding-bottom: 3px;"> Arabic</a></li>
                                                            </ul>
                                                        @endif
                                                        
                                                    </li>
        
                                                </ul>
        
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </header>
            <!-- end: Header -->

            <!-- Main content -->
            @yield('content')
            <!-- end: Main content -->


            
            <!-- Footer Area -->

            <footer class="footer-area wow fadeIn" data-wow-delay=".2s" style="background-image: url({{ asset('front_assets/img/footer-bg.png') }});">
               <div class="shape-divider" data-shape="wave-2" data-height="150" id="shape-divider-3579"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7 c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3 c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1 c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8 c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1 c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path><path class="shape-divider-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z"></path><path class="shape-divider-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z"></path><path class="shape-divider-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z"></path><path class="shape-divider-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z"></path><path class="shape-divider-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z"></path><path class="shape-divider-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path><path class="shape-divider-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z"></path><path class="shape-divider-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z"></path></svg></div>
                <div class="container pt-50">
                    <div class="footer-up">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="">
                                    <img src="{{ asset('storage/'.$logo->logo) }}" alt="expoint-logo" style="width: 60px">
                                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                        <span class="text-white" style="font-family: 'Kufam', cursive;font-size: 20px;">سيفتي كار</span>
                                    @elseif (LaravelLocalization::getCurrentLocale() == 'en')  
                                        <span class="text-white" style="font-family: 'Audiowide', cursive;font-weight: 600;font-size: 20px;">SAFETY CARS</span>
                                    @endif
                                </div>
                                <p>Best Solutions for Car Security Services, We're leading Vehicle Tracking Service in Egypt</p>
                                <div class="social-area">
                                    <a href=""><i class="lab la-facebook-f"></i></a>
                                    <a href=""><i class="lab la-instagram"></i></a>
                                    <a href=""><i class="lab la-twitter"></i></a>
                                    <a href=""><i class="la la-skype"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 offset-lg-1 col-md-6 com-sm-12">
                                <h5 class="text-center">Main Menu</h5>
                                <div class="row justify-content-center">
                                    <div class="col-5 offset-lg-2">
                                        <ul>
                                            <li>
                                                <a href="{{route('welcome')}}">Home</a>
                                                <a href="{{route('products')}}">Products</a>
                                                <a href="{{request()->routeIs('welcome') ? '#faq' : '/#faq' }}">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-5">
                                        <ul>
                                            <li>
                                                <a href="{{route('enterprise')}}">Enterprise</a>
                                                <a href="{{route('contact')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 offset-lg-1 col-md-6">
                                <div class="subscribe-form">
                                    <h5>Contact Info</h5>
                                    <ul class="list-icon text-light">
                                        <li class="my-2"><i class="fa fa-map-marker"></i> 12 Lotfy Hassona St., Off Tahrir Street, Dokki, Giza, Egypt <br></li>
                                        <li class="my-2"><i class="fa fa-phone"></i> (+20) 33383949 </li>
                                        <li class="my-2"><i class="fa fa-envelope"></i> <span>info@safetycars.net</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
            <div class="footer-bottom py-2">
                <div class="container">
                <div class="row">
                <div class="col-md-12 text-center">
                    <div class="text-center">
                        <p class="text-center mb-0 pb-0" style="font-weight: bold;font-size: 12pt;color: #fff;font-family: Raleway, sans-serif;padding: 10px 0;">Powered By 
                            <a href="https://armasoftware.com/">
                                <img width="70" class="lazy img-loaded" src="https://armasoftware.com/arma_logo.png" data-src="https://armasoftware.com/arma_logo.png"> 
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                </div>
            </div>

            <!-- Scroll Top Area -->
            <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>

        
        
        <!-- Popper JS -->
        <script src="{{ asset('front_assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('front_assets/js/wow.min.js') }}"></script>
        <!-- Way Points JS -->
        <script src="{{ asset('front_assets/js/jquery.waypoints.min.js') }}"></script>
        <!-- Counter Up JS -->
        <script src="{{ asset('front_assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
        <!-- Isotope JS -->
        <script src="{{ asset('front_assets/js/isotope-3.0.6-min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('front_assets/js/magnific-popup.min.js') }}"></script>
        <!-- Sticky JS -->
        <script src="{{ asset('front_assets/js/jquery.sticky.js') }}"></script>
        <!-- Progress Bar JS -->
        <script src="{{ asset('front_assets/js/jquery.barfiller.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('front_assets/js/main.js') }}"></script>

        <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


        <script>

            $.ajax({
				url: 		"{{route('visits')}}",
				method: 	'POST',
				dataType: 	'text',
				data:		$('.visits_form').serialize()	,
				success : function(response)
						 {}
			});

        </script>
        <script>
            $('.contact_form').submit(function(e)
            {
                e.preventDefault();
                $('.submit').prop('disabled', true);
                $('.error').text('');

                var head1   = 'Thank You';
                var title1  = 'Your Message Has Been Sent Successfully, We will contact you ASAP. ';
                var head2   = 'Oops...';
                var title2  = 'Something went wrong, please try again later.';

                $.ajax({
                    url:        "{{route('message')}}",
                    method:     'POST',
                    dataType:   'json',
                    data:       $(this).serialize() ,
                    success : function(data)
                        {
                            $('.submit').prop('disabled', false);
                            
                            if (data['status'] == 'true')
                            {
                                Swal.fire(
                                        head1,
                                        title1,
                                        'success'
                                        )
                                $('.field').text('');
                                $('.field').val('');
                            }
                            else if (data['status'] == 'false')
                            {
                                Swal.fire(
                                        head2,
                                        title2,
                                        'error'
                                        )
                            }
                        },
                        error : function(reject)
                        {
                            $('.submit').prop('disabled', false);

                            var response = $.parseJSON(reject.responseText);
                            $.each(response.errors, function(key, val)
                            {
                                Swal.fire(
                                        head2,
                                        val[0],
                                        'error'
                                        )
                            });
                        }
                    
                    
                });

            });
        </script>

        <script>
            $('.enterprise_form').submit(function(e)
            {
                e.preventDefault();
                $('.submit').prop('disabled', true);
                $('.error').text('');

                var head1   = 'Thank You';
                var title1  = 'Your Request Has Been Sent Successfully, We will contact you ASAP. ';
                var head2   = 'Oops...';
                var title2  = 'Something went wrong, please try again later.';

                $.ajax({
                    url:        "{{route('enterprisesubmit')}}",
                    method:     'POST',
                    dataType:   'json',
                    data:       $(this).serialize() ,
                    success : function(data)
                        {
                            $('.submit').prop('disabled', false);
                            
                            if (data['status'] == 'true')
                            {
                                Swal.fire(
                                        head1,
                                        title1,
                                        'success'
                                        )
                                $('.field').text('');
                                $('.field').val('');
                            }
                            else if (data['status'] == 'false')
                            {
                                Swal.fire(
                                        head2,
                                        title2,
                                        'error'
                                        )
                            }
                        },
                        error : function(reject)
                        {
                            $('.submit').prop('disabled', false);

                            var response = $.parseJSON(reject.responseText);
                            $.each(response.errors, function(key, val)
                            {
                                Swal.fire(
                                        head2,
                                        val[0],
                                        'error'
                                        )
                            });
                        }
                    
                    
                });

            });
        </script>        
        @yield('script')

</body>
</html>
