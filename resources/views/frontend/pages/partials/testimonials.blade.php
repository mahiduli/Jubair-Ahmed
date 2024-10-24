<section class="testimonials-section bg-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-xs-12">
                <div class="testimonial-area sp-four">
                    <div class="sec-title-two pb-one text-center">
                        <h4>What our Student says</h4>
                    </div>
                    <div class="testimonial-carousel">
                        @foreach ($testimonial as $testimonials)
                        @if ($testimonials != '')
                        <div class="slide-item text-center">
                            <h6>{{ $testimonials->name }}</h6>
                            <p>{{ $testimonials->department }}</p>
                            <span>{!! $testimonials->short_desc !!} </span>
                        </div>
                        @endif   
                        @endforeach
                    </div>                  
                </div>
            </div>
        </div>                    
    </div>
</section>
