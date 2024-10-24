@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>About Us</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>about us</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Start Wellcome Section-->
@include('frontend.pages.partials.aboutus')
<!--End Wellcome Section-->


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


<!--Start Brand area-->  
@include('frontend.pages.partials.overses_partner')

<!--End Brand area-->

@endsection