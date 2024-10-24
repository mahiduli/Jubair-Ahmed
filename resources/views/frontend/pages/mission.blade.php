@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Mission & Vission</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="{{route('home.index')}}">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Mission & Vission</li>
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
                    @php
                    $about = App\Models\About::find(1);
                    @endphp
                    <div class="tabs-box">
                        <div class="tab-buttons clearfix">
                            <a href="#tab-one" class="tab-btn active-btn">Our Mission</a>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab active-tab" id="tab-one" style="display: block">
                                <div class="text">
                                    @if($about && $about->mission != '')
                                        <p>{!! $about->mission !!}<p>
                                    @else
                                        <p>Nothing available</p>
                                     @endif
                                    
                                </div>                               
                            </div>
                                           
                        </div>                    
                    </div>
					<div class="tabs-box">
                        <div class="tab-buttons clearfix">
                            <a href="#tab-one" class="tab-btn active-btn">Our Vission</a>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab active-tab" id="tab-one" style="display: block">
                                <div class="text">
                                    
                                    @if($about && $about->vission != '')
                                    <p>{!! $about->vission !!}</p>
                                @else
                                    <p>Nothing available</p>
                                 @endif
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