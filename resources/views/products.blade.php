
@extends('layouts.app')


@section('content')



 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>Products</h1>
                        <h6><a href="{{route('welcome')}}">Home</a> / Products</h6>
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
							<img src="{{ asset('front_assets/img/gt06n.png') }}" alt="gt06n">
						</div>
						<div class="blog-content">
							<h5><a href="{{route('gt06n')}}">GT06N </a>
							</h5>
							<p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, facilis perferendis ipsam.</p>
							<a href="{{route('gt06n')}}" class="read-more">Read More</a>
						</div>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-blog-item wow fadeInLeft" data-wow-delay=".6s">
						<div class="blog-bg">
							<img src="{{ asset('front_assets/img/tk303.png') }}" alt="">
						</div>
						<div class="blog-content">
							<h5><a href="{{route('tk303')}}">TK303</a></h5>
							<p>There are some reason Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, facilis perferendis ipsam.</p>
							<a href="{{route('tk303')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>


@endsection


@section('script')


@endsection