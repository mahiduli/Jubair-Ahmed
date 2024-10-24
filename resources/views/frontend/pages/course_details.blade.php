@extends('master')

@section('content')

<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Courses</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index-2.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Courses Grid</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--main-footer-->
<section class="blog-single-section sp-three">
    <div class="container">
        <div class="title-area clearfix">
            <div class="sec-title-one pb-one">
                <h4>{{$data->name}}</h4>
            </div>
        </div>  
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                    <div class="blog-item-one">
                        <div class="">
                            <figure>
                                <img src="/courseimage/{{$data->image}}" alt="">
                            </figure>
                            
                        </div>
                        
                    </div>
                    
                    <div class="content-text">
                        <p>{!! $data->description !!}</p>
                    </div>
                    
                    <div class="info clearfix m-4" style="color: rgb(197, 19, 19); font:bold;">
                        <div class="float-left "><h6><i class="fa fa-calendar" aria-hidden="true"></i> Duration : {{$data->duration}}</h6></div>
                    </div>
                    <div class="info clearfix m-4" style="color: rgb(197, 19, 19); font:bold;">
                        <div class="float-left "><h6>Registretion Fee : {{$data->Fee}}</h6></div>
                    </div>
                    <div class="float-center m-3">
                        <a href="{{$data->link}}" class="btn btn-outline-success font-semibold">Registretion Now</a>
                    </div>
                    
                    {{-- <div class="related-posts">
                        <div class="title">
                            <h6>In Courses</h6>
                        </div>                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-item-one">
                                    <div class="image-box">
                                        <figure>
                                            <a href="#"><img src="images/blog/26.jpg" alt=""></a>
                                        </figure>
                                        
                                        <div class="date-box">
                                            <p>Basic Knowledge </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-item-one">
                                    <div class="image-box">
                                        <figure>
                                            <a href="#"><img src="images/blog/House Wiring.jpg" alt=""></a>
                                        </figure>
                                        
                                        <div class="date-box">
                                            <p>House Wiring </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
							<div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-item-one">
                                    <div class="image-box">
                                        <figure>
                                            <a href="#"><img src="images/blog/27.jpg" alt=""></a>
                                        </figure>
                                       
                                        <div class="date-box">
                                            <p>Motor Re-Winding</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
							<div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-item-one">
                                    <div class="image-box">
                                        <figure>
                                            <a href="#"><img src="images/blog/Indsustrial Wiring.jpg" alt=""></a>
                                        </figure>
                                        
                                        <div class="date-box">
                                            <p>Indsustrial Wiring & Motor Starter Controlling Cercuite  </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div> --}}
                    
                                                                   
                </div>
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="right-side-bar">

                    @include('frontend.pages.partials.sideCourse')

                    @include('frontend.pages.partials.hotLine')
                            
                </div>
            </div>
        </div>
    </div>
</section>
<!--main-footer-->
@endsection