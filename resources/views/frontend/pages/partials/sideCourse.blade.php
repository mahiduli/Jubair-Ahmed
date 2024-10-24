<div class="side-menu">
    <div class="item-one">
        <div class="sec-title-one pb-one">
            <h6>Courses</h6>
        </div>
        <ul class="side-bar-menu">
            @foreach ($course as $courses)
            <li><a href="{{ route('home.course_category_details', $courses->id ) }}"><span></span>{{ $courses->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div> 