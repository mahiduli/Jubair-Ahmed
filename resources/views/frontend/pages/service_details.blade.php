@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>{{ $service->name }}</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>{{ $service->name }}</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Single-Product-Section-->
<section class="single-product-section sp-nine">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                   
                    <div class="tabs-box">
                        <div class="tab-buttons clearfix">
                            <a href="#tab-one" class="tab-btn active-btn">Description</a>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab active-tab" id="tab-one" style="display: block">
                                <div class="text">
                                    <p>{!! $service->description !!}</p>
                                </div>                               
                            </div>
                                           
                        </div>                    
                    </div>                                                     
                </div>
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="right-side-bar">
                    
                    <div class="side-menu">
                                 
                        
                        @include('frontend.pages.partials.hotLine')

                    </div>          
                </div>
            </div>
        </div>
    </div>
</section>
<!--Single-Product-Section-->
@endsection