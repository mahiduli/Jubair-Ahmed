@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>{{ $courseCat->name }}</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>{{ $courseCat->name }}</li>
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
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                    <div class="blog-item-one">
                        <div class="">
                            <figure>
                                <img src="/categoryimage/{{$courseCat->image}}" alt="">
                            </figure>
                            
                        </div>
                        
                    </div>
                    
                    <div class="content-text">
                        <p>{!! $courseCat->description !!}</p>

                    </div>
                    
                    <div class="related-posts">
                        <div class="title">
                            <h6>In Courses</h6>
                        </div>                        
                        <div class="row">
                            @foreach ($data as $catCourse)
                            @if ($catCourse != '')
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-item-one">
                                    <div class="image-box">
                                        <figure>
                                            <img src="/courseimage/{{$catCourse->image}}" alt="">
                                            <div class="overlay">
                                                <a class="link-btn" href="{{ route('home.course_details',$catCourse->id) }}">
                                                    <i class="fa fa-link"></i>
                                                </a>                                
                                            </div>
                                        </figure>
                                        
                                        <div class="date-box">
                                            <p>{{$catCourse->name}} </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>                                         
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