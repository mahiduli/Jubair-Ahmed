<section class="brand-area bg-two sp-five">
    <div class="container">
        <div class="brand">
            @foreach ($overses_gallery as $overses)
            <!--Start single item-->
            <a class="tool_tip" title="{{$overses->name}}" href="#">
                <div class="single-item"title="{{$overses->name}}">
                    @if ($overses->image != '')
                    <img style="" src="/overseasgallery/{{$overses->image}}" alt="Awesome Brand Image">
                    @endif
                </div>
            </a>
            <!--End single item-->
            @endforeach
        </div>
    </div>
</section>