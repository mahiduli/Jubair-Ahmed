@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Job Placement Cell</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Job Placement Cell</li>
        </ul>         
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<section class="welcome-section sp-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12">
                <div class="wellcome-left-colmun">
                    <div class="title-area clearfix">
                        <div class="sec-title-one pb-one">
                            <h4>Job Placement</h4>
                        </div>
                    </div>
                    @php
                        $about_placement = App\Models\About::find(1);
                    @endphp
                    <div class="content-text">
                        @if($about_placement && $about_placement->job_placement != '')
                            <p> {!! $about_placement->job_placement !!} </p>
                        @else
                            <p>Nothing available</p>
                         @endif
                        
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</section>
<!--testimonials Section-->
@include('frontend.pages.partials.testimonials')
<!--testimonials Section-->
<!--Slide Gallery-->
<section class="slide-gallery sp-ten">
    <div class="container">
        <div class="title-area clearfix">
            <div class="sec-title-one pb-one">
                <h4>Job Placement Gallery</h4>
            </div>
        </div>
        <div class="gallery-area">
            
            <div class="row">
                
                @foreach ($placement as $img)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="item two">
                        <figure>
                            <img src="/placementgallery/{{$img->image}}" alt="">
                        </figure>
                        <div class="overly">
                            <h6>Our Journey</h6>
                        </div>
                        <div class="icon-box">
                            <a data-fancybox="1" href="/placementgallery/{{$img->image}}" class="img-popup"><i class="flaticon-plus"></i></a>
                        </div>
                    </div>
                </div>  
                @endforeach                   
            </div>
            <div class="your-paginate mt-4">
                {{ $placement->links() }}
            </div>
        </div>          
    </div>
</section>
<!--End Slide Gallery-->

<!--Start Brand area-->

@include('frontend.pages.partials.overses_partner')
@endsection