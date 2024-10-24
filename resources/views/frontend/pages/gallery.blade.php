@extends('master')

@section('content')

<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Gallery</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Gallery</li>
        </ul>         
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Slide Gallery-->
<section class="slide-gallery sp-ten">
    <div class="container">
        <div class="gallery-area">
            <div class="row">
                @foreach ($gallery as $img)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="item two">
                        <figure>
                            <img src="/galleryimage/{{$img->image}}" alt="">
                        </figure>
                        <div class="overly">
                            <h6>Our Journey</h6>
                        </div>
                        <div class="icon-box">
                            <a data-fancybox="1" href="/galleryimage/{{$img->image}}" class="img-popup"><i class="flaticon-plus"></i></a>
                        </div>
                    </div>
                </div>  
                @endforeach                   
            </div>
        </div>
        <div class="your-paginate mt-4">
            {{ $gallery->links() }}
        </div>           
    </div>
</section>
<!--End Slide Gallery-->
@endsection