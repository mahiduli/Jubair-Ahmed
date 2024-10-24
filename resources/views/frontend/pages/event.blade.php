@extends('master')

@section('content')
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Event</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Event</li>
        </ul>         
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<section class="event-grid-section sp-ten">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <div class="left-side-area">
                    <div class="row">
                        @foreach ($event as $events)
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="event-item-one two">
                                <div class="image-box">
                                    <figure>
                                        @if ($events->image != '')
                                            <img src="/eventimage/{{$events->image}}" alt="">
                                        @endif
                                    </figure>
                                    
                                    <div class="date-box">
                                        <ul>
                                            <li><h3>{{ $events->date }}</h3></li>
                                            <li><p>{{ $events->month }}<br>{{ $events->year }}</p></li>
                                        </ul>
                                    </div>
                                </div>
                                <br><h6><font color="#DC2A2A">{{ $events->title }}</font></h6>
                               
                                <br><p class="event-text">{!! $events->description !!}</p>
                              
                            </div>
                        </div>
                        @endforeach
                    </div>
                                                                             
                </div>
                <div class="your-paginate mt-4">
                    {{ $event->links() }}
                </div>
            </div>
            
             <div class="col-xl-4 col-sm-12">
                <div class="right-side-bar">

                    @include('frontend.pages.partials.sideCourse')
                    

                    @include('frontend.pages.partials.hotLine')
                        
                        
                             
                </div>
            </div>
    </div>
</section>
@endsection