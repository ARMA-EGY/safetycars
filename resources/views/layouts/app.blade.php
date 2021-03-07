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
    <input type="hidden" name="page_token" value="">
</form>

            <!-- Header -->
            <header class="header-area">
                <div class="sticky-area">
                    <div class="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="logo">
                                        <a class="navbar-brand" href="index.html">
                                            <img src="{{ asset('front_assets/img/logo.png') }}" alt="">
                                            <span class="text-dark" style="font-family: 'Audiowide', cursive;font-weight: 600;">SAFETY CARS</span>
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
                                                        <a class="nav-link active" href="#">Home</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Products</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">FAQ</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Enterprise</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="contact.html">Contact</a>
                                                    </li>
        
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">
                                                            <img src="{{ asset('front_assets/img/flags/en.png') }}" style="width: 15px;padding-bottom: 3px;">
                                                        EN
                                                            <span class="sub-nav-toggler">
                                                            </span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#"><img src="{{ asset('front_assets/img/flags/en.png') }}" style="width: 15px;padding-bottom: 3px;"> English</a></li>
                                                            <li><a href="#"><img src="{{ asset('front_assets/img/flags/ar.png') }}" style="width: 15px;padding-bottom: 3px;"> Arabic</a></li>
                                                        </ul>
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
                <div class="container">
                    <div class="footer-up">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="logo">
                                    <img src="{{ asset('front_assets/img/logo-white.png') }}" alt="expoint-logo">
                                </div>
                                <p>We are the Top Courier Service Provider and Logistics Solutions. We’re services around over the worldwide. We never give up on the challenges.</p>
                                <div class="social-area">
                                    <a href=""><i class="lab la-facebook-f"></i></a>
                                    <a href=""><i class="lab la-instagram"></i></a>
                                    <a href=""><i class="lab la-twitter"></i></a>
                                    <a href=""><i class="la la-skype"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
                                <h5>Explore</h5>
                                <ul>
                                    <li>
                                        <a href="#">About Company</a>
                                        <a href="#">Latest News</a>
                                        <a href="#">Get a Quote</a>
                                        <a href="#">Pricing Guide</a>
                                        <a href="#">Helpful FAQ</a>
                                        <a href="#">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h5>Services</h5>
                                <ul>
                                    <li>
                                        <a href="#"><span>-</span> Express Courier</a>
                                        <a href="#"><span>-</span> Pallet Courier</a>
                                        <a href="#"><span>-</span> Air Freight</a>
                                        <a href="#"><span>-</span> Ocean Freight</a>
                                        <a href="#"><span>-</span> Warehousing</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="subscribe-form">
                                    <h5>Newsletter</h5>
                                    <p>Sign Up now for latest news update</p>
                                    <form action="index.html">
                                        <input type="email" placeholder="Your email">
                                        <button class="main-btn">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-line">© 2021 Expoint. All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
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
