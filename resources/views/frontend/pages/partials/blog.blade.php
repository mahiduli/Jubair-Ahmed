<section class="blog-section sp-three">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Events</h4>
        </div>
        <div class="title-text text-center">
            <span>Special Memories about our Asia Technical Training Center (ATTC) on Way to Reach a Milestone. </span>
        </div>
        <div class="row">
            @foreach ($event as $events)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="blog-item-one">
                    <div class="image-box">
                        <figure>
                            @if ($events->image != '')
                            <img src="/eventimage/{{$events->image}}" alt="">
                            @endif
                        </figure>
                        <div class="overlay">
                            <a class="link-btn" href="event.html">
                                <i class="fa fa-link"></i>
                            </a>                                
                        </div>
                        <div class="date-box">
                            <p>{{ $events->date }}{{ $events->month }},{{ $events->year }}</p>
                        </div>
                    </div>
                    <div class="image-text">
                        <h6><a href="event.html">{{ $events->title }}</a></h6>
                        <p> {!! $events->description !!}</p>
                        <div class="link-btn">
                            <a href="{{route('home.event')}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>