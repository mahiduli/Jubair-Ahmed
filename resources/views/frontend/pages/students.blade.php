@extends('master')

@section('content')
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Coming soon</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Student</li>
        </ul>         
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
@endsection