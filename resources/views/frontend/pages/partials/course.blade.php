<section class="gallery-section sp-three">
    <div class="container">
        <div class="title-area clearfix">
            <div class="sec-title-one pb-one">
                <h4>Latest Courses</h4>
            </div>
            
        </div>           

        <div class="row filter-layout">
            @foreach ($latestCourse as $course)
            @if ($course->status != '0')
            <article class="col-xl-4 col-lg-6 col-sm-12 filter-item Consulting Growth">
                <div class="gallery-item">
                    <div class="image-box">
                        @if ($course->image != '')
                        <img src="/courseimage/{{$course->image}}" alt="">
                        @endif
                        <div class="overlay">
                            <a class="link-btn" href="{{ route('home.course_details',$course->id) }}">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="image-content">
                        
                        <div class="reting clearfix">
                            
                            <div class="float-center">
                                <a href="{{$course->link}}">Registretion Now</a>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <h6><a href="{{ route('home.course_details',$course->id) }}">{{$course->name}}</a></h6>
                            <a href="{{ route('home.course_category_details',$course->id) }}"><b>{{$course->category}}</b> </a>
                        </div>
                        <div class="info clearfix">
                            <div class="float-left"><p><i class="fa fa-calendar" aria-hidden="true"></i>Duration : {{$course->duration}}</p></div>
                            
                        </div>                       
                    </div>                        
                </div>                    
            </article> 
            @endif
            
            @endforeach
        </div>
        <div class="link-btn">
            <a href="{{route('home.all_course')}}">All Courses <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>