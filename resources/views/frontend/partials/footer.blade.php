<!--main-footer-->
<footer class="main-footer bg-four sp-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-about-widget">
                    <div class="footer-logo">
                        <figure>
                            <a href="index.html"><img src="{{ asset('frontend/images/logo-2.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <p>The organization was founded with a view to provide training to unemployed peoples to get the employment local and overseas.</p>
                    @php
                        $setting = App\Models\Setting::find(1);
                    @endphp
                    @if($setting && $setting->fb_url != '' && $setting->gm_url != '' && $setting->in_url != '')
                    <ul class="social-links">
                        @if ($setting->fb_url != '')
                        <li><a target="new-tab" href="{{$setting->fb_url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        @else
	                    <p>not available</p>
                        @endif
                        @if ($setting->gm_url != '')
                        <li><a target="new-tab" href="{{$setting->gm_url}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        @else
	                    <p>not available</p>
                        @endif
                        @if ($setting->in_url != '')
                        <li><a target="new-tab" href="{{$setting->in_url}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        @else
	                    <p>not available</p>
                        @endif
                    </ul>
                    @else
	                    <p>not available</p>
                    @endif
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-menu-link">
                   <div class="sec-title-one pb-one">
                        <h6>Up Coming Interviews</h6>
                    </div>                            
                    <ul>
                        @foreach ($latest_interview as $doc)
                        @if ($doc != "")
                        <li><a href="{{route('home.interview')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>{{ $doc->title }}</a></li>
                        @endif 
                        @endforeach
                    </ul>
                </div>
            </div>                    
            
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-gallery-widget">
                    <div class="sec-title-one pb-one">
                        <h6>Image Gallery</h6>
                    </div>
                    <div class="innar-box">
                        <div class="row"> 
                            @foreach ($gallery as $img)                       
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="{{ route('home.gallery') }}" class="img-popup"><img src="/galleryimage/{{$img->image}}" alt=""></a>
                                </figure>
                            </div>
                            @endforeach 
                        </div>                            
                    </div>
                </div> 
            </div>
        </div>
    </div>   
</footer>
<!--End main-footer--> 


<!--Start Footer Bottom--> 
<section class="footer-bottom bg-three">
    <div class="container">
        <div class="bottom-text text-center">
            <p>&copy; Copyrights 2024 Design by <b><a target="new-tab" href="https://www.facebook.com/eodesignhouse/"><font size="3" color="#42063F">EO Design Studio BD</a></b> & Devoloped by <b><a target="new-tab" href="https://www.linkedin.com/in/nur-jannat-87b231256/"><font size="3" color="#42063F">Nur Jannat</a><b></p>
        </div>
    </div>
</section>
<!--End Footer Bottom-->