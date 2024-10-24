@extends('master')

@section('content')

<section class="main-slider style-1">
    @php
    $setting = App\Models\Setting::find(1);
    @endphp
    <div class="main-slider-carousel owl-carousel owl-theme">
        <div class="slide" style="background-image:url('{{ asset('frontend/images/slides/1.jpg')}}')">
            <div class="container">
                <div class="content">
                    <div class="image">
                        @if($setting && $setting->image != '')
                            <img src="/setting/{{$setting->image}}" alt="">
                        @else
                            <p>No image available</p>
                        @endif
                        
                    </div>
                    <h3>Welcome To</h3>
                    <h2><font size="8" color="398FF3">Asia Technical Training Center (ATTC)  </font><br> <font size="6"> Center Code: 50821</font></h2>
                    <div class="link-box">
                        <a href="{{ route('home.all_course') }}" class="theme-btn btn-style-one">Our Courses</a> <a href="{{ route('home.contact') }}" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slide" style="background-image:url('{{ asset('frontend/images/slides/2.jpg')}}')">
            <div class="container">
                <div class="content">
                    <div class="image">@if($setting && $setting->image != '')
                        <img src="/setting/{{$setting->image}}" alt="">
                    @else
                        <p>No image available</p>
                    @endif</div>
                    <h3>Registered Training Organization</h3>
                    <h2>Bangladesh Technical Education Board <br>(BTEB)</h2>
                    <div class="link-box">
                        <a href="{{ route('home.all_course') }}" class="theme-btn btn-style-one">Our Courses</a> <a href="{{ route('home.contact') }}" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:url('{{ asset('frontend/images/slides/2.jpg')}}')">
            <div class="container">
                <div class="content">
                    <div class="image">
                        @if($setting && $setting->image != '')
                        <img src="/setting/{{$setting->image}}" alt="">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
                    <h3>Competency Based Training & Assesment (CBT&A)</h3>
                    <h2>And Testing Center</h2>
                    <div class="link-box">
                        <a href="{{ route('home.all_course') }}" class="theme-btn btn-style-one">Our Courses</a> <a href="{{ route('home.contact') }}" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Start Wellcome Section-->
@include('frontend.pages.partials.aboutus')
<!--End Wellcome Section-->

<!--Gallery Section-->
@include('frontend.pages.partials.course')
<!--End Gallery Section-->
<!--Start fact Counter Area-->
<section class="fact-counter-area" style="background: url('{{asset('frontend/images/resources/fact-counter.jpg')}}');">
    
</div>
</section>
<!--End fact Counter Area-->
<!--Team Section-->
@include('frontend.pages.partials.team')
<!--Team Section-->

<!--testimonials Section-->
@include('frontend.pages.partials.testimonials')
<!--testimonials Section-->

<!--Blog Section-->
@include('frontend.pages.partials.blog')
<!--Blog Section-->

<!--Start Brand area-->
@include('frontend.pages.partials.overses_partner')

<!--End Brand area-->

@endsection