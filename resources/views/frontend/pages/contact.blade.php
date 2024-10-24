@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>contact us</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>contact us</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->

<!--Contact Section-->
<section class="contact-section sp-ten">
    <div class="container">
        <div class="map-area">
            <div class="google-map-area">
                <div 
                    class="google-map" 
                    id="contact-google-map"
                    data-map-lat="40.80419" 
                    data-map-lng="-74.012077" 
                    data-icon-path="images/icon/map-marker.png" 
                    data-map-title="149/-C, Shah Alibag,Mirpur-1, Dhaka, Bangladesh" 
                    data-map-zoom="50" 
                    data-markers='{
                        "marker-1": [45.355985, -72.934990, "<h4>Head Office</h4><p>149/-C, Shah Alibag,Mirpur-1, Dhaka, Bangladesh</p>"]
                    }'>
                </div>
            </div>
        </div>
        <div class="contact-area">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="left-side">
                        <div class="text-title">
                            <h5>Communicate us</h5>
                        </div>
                        @php
                            $setting = App\Models\Setting::find(1);
                        @endphp
                        <div class="social-links">
                            <div class="item ">
                                <div class="icon-box col-4">
                                    <i class="flaticon-home-button"></i>
                                </div>
                                <div class="icon-text col-6">
                                    @if($setting && $setting->address != '')
                                    <p>{{$setting->address}}</p>
                                    @else
	                                    <p>not available</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box col-4">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="icon-text col-6">
                                    @if($setting && $setting->phone != '')
                                    <p>{{$setting->phone}}</p>
                                    @else
	                                    <p>not available</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box col-4">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="icon-text col-6">
                                    @if($setting && $setting->gmail != '')
                                    <p>{{$setting->gmail}}</p>
                                    @else
	                                    <p>not available</p>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>                                           
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="right-side">
                        <div class="text-title"> 
                            <h5>Contact form</h5>
                        </div>
                        <form id="contact_form" name="contact_form" action="asiatechnical@yahoo.com" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control" value="" placeholder="Your Email *" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="form_website" class="form-control" value="" placeholder="Website *" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Type Your Message Here . . ."></textarea>
                                    </div>
                                    <div class="form-group form-bottom">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</section>
<!--End Contact Section-->

@endsection