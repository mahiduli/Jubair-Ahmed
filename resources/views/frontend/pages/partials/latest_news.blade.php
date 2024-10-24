<!--admission scroll start-->
<div class="hot-news col-right-6  transform-revers-2">
    <h5 class="themecolor1">  <a> <center><u>Latest News</u></center></a></h5>
    <marquee behavior="scroll" direction="left">
        @foreach ($latest_notice as $notice)
        @if ($notice != "")
            <a href="{{ route('home.notice') }}">#{{ $notice->title }} </a>
        @endif 
        @endforeach
    </marquee>
</div>