<section class="welcome-section sp-two">
    <div class="container">
        <div class="row">
            @php
                $about = App\Models\About::find(1);
            @endphp
            <div class="col-xl-7 col-lg-12 col-sm-12">
                <div class="wellcome-left-colmun">
                    <div class="text">
                        <h5>Welcome to ATTC</h4>
                    </div>
                    <div class="content-text">
                        @if($about && $about->about_desc != '')
                        <p>{!! $about->about_desc !!}</p>
                        @else
                            <p>Nothing available</p>
                        @endif
                        
                        
                    </div>
                </div>                    
            </div>
            <div class="col-xl-5 col-lg-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        @if($about && $about->image != '')
                            <img src="/about/{{$about->image}}" alt="">
                        @else
                            <p>No image available</p>
                        @endif
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>