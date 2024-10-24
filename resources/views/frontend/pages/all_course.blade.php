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
            <li>Courses</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->

<!--main-footer-->
<section class="courses-grid-section sp-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                    <div class="row">
                        @foreach ($allcourses as $data)

                        <article class="col-xl-6 col-md-6 col-sm-12">
                            <div class="gallery-item">
                                <div class="image-box">
                                    <img src="/courseimage/{{$data->image}}" alt="">
                                    <div class="overlay">
                                        <a class="link-btn" href="{{ route('home.course_details',$data->id) }}">
                                            <i class="fa fa-link"></i>
                                        </a>                                
                                    </div>
                                </div>
                                <div class="image-content">
                                    <div class="date-box">
                                        <h6>${{$data->Fee}}</h6>
                                    </div>
                                    <div class="reting clearfix">
                                        <div class="float-right">
                                            <a href="{{$data->link}}"><span>Join Now</span></a>
                                        </div>
                                        
                                    </div>
                                    <div class="bottom-text">
                                        <a href="{{ route('home.course_details',$data->id) }}"><h6>{{$data->name}}</h6></a>
                                    </div>                     
                            </div>                    
                        </article> 

                        @endforeach
                        
                        
                    </div>
                    <div class="your-paginate mt-4">
                        {{ $allcourses->links() }}
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