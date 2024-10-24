<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    <div class="boxed_wrapper">

        <!--Start Preloader -->
        <div class="preloader"></div>
        <!--End Preloader -->  
        
        <!-- Navbar Start -->
        @include('frontend.partials.navbar')
        <!-- Navbar End -->
        <!-- Header Start -->
        {{-- @include('frontend.partials.header') --}}
        <!-- Header End -->

        @yield('content')
        

        <!-- Footer Start -->
        @include('frontend.partials.footer')
        <!-- Footer End -->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </div>
<!--End Scroll to top-->
    </div>

    @include('frontend.partials.scripts')
</body>

</html>