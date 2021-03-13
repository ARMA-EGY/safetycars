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
                        <h1>GT06N</h1>
                        <h6><a href="{{route('welcome')}}">{{__('core.HOME')}}</a> / <a href="{{route('products')}}">{{__('core.PRODUCTS')}}</a> / GT06N</h6>
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
                        <img class="d-flex m-auto" src="{{ asset('front_assets/img/gt06n.png') }}" alt="gt06n">
                        <h2>{{__('core.P1-d')}}</h2>
                        <p>{{__('core.P1-dd1')}}</p>
                        
                        <p>{{__('core.P1-dd2')}}</p>
                        
                        <h2>{{__('core.P1-f')}}</h2>
                        <hr>

                        <h5>{{__('core.P1-f1t')}}</h5>
                        <p>{{__('core.P1-f1d')}}</p>
                        
                        
                        <h5>{{__('core.P1-f2t')}}</h5>
                        <p>{{__('core.P1-f2d')}}</p>
                        
                        
                        <h5>{{__('core.P1-f3t')}}</h5>
                        <p>{{__('core.P1-f3d')}}</p>
                        
                        
                        <h5>{{__('core.P1-f4t')}}</h5>
                        <p>{{__('core.P1-f4d')}}</p>
                        
                        
                        <h5>{{__('core.P1-f5t')}}</h5>
                        <p>{{__('core.P1-f5d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P1-f6t')}}</h5>
                        <p>{{__('core.P1-f6d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P1-f7t')}}</h5>
                        <p>{{__('core.P1-f7d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P1-f8t')}}</h5>
                        <p>{{__('core.P1-f8d')}}</p>
                        
                       
                        
                        <h5>{{__('core.P1-f9t')}}</h5>
                        <p>{{__('core.P1-f9d')}}</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')


@endsection