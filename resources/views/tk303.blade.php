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
            <div class="row {{$text}}" dir="{{$dir}}" lang="{{$lang}}">
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

                <div class="col-lg-10 {{$text}}" dir="{{$dir}}" lang="{{$lang}}">
                    <div class="single-service">
                        <img class="d-flex m-auto" src="{{ asset('front_assets/img/tk303.png') }}" alt="TK303">
<h2>{{__('core.P2-d')}}</h2>
                        <p>{{__('core.P2-dd1')}}</p>
                        
                        <p>{{__('core.P2-dd2')}}</p>
                        
                        <h2>{{__('core.P2-f')}}</h2>
                        <hr>

                        <h5>{{__('core.P2-f1t')}}</h5>
                        <p>{{__('core.P2-f1d')}}</p>
                        
                        
                        <h5>{{__('core.P2-f2t')}}</h5>
                        <p>{{__('core.P2-f2d')}}</p>
                        
                        
                        <h5>{{__('core.P2-f3t')}}</h5>
                        <p>{{__('core.P2-f3d')}}</p>
                        
                        
                        <h5>{{__('core.P2-f4t')}}</h5>
                        <p>{{__('core.P2-f4d')}}</p>
                        
                        
                        <h5>{{__('core.P2-f5t')}}</h5>
                        <p>{{__('core.P2-f5d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P2-f6t')}}</h5>
                        <p>{{__('core.P2-f6d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P2-f7t')}}</h5>
                        <p>{{__('core.P2-f7d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P2-f8t')}}</h5>
                        <p>{{__('core.P2-f8d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P2-f9t')}}</h5>
                        <p>{{__('core.P2-f9d')}}</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')


@endsection