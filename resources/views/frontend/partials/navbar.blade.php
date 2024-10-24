<header class="main-header">
            
    <!--Start header area-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="header-logo">
                        <a href="{{ route('home.index') }}">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Awesome Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="header-contact-info">
                        @php
                            $setting = App\Models\Setting::find(1);
                        @endphp
                        <ul>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-home-button"></span>
                                </div>
                                <div class="text-holder">
                                    <strong>ADDRESS:</strong>
                                    @if($setting && $setting->address != '')
                                    <p>{{$setting->address}}</p>
                                    @else
	                                    <p>not available</p>
                                    @endif
                                    
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-phone-call"></span>
                                </div>
                                <div class="text-holder">
                                    <strong>PHONE:</strong>
                                    @if($setting && $setting->phone != '')
                                    <p>{{$setting->phone}}</p>
                                    @else
	                                    <p>not available</p>
                                    @endif
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>           
            </div>
        </div>
    </header>
    <!--End header area-->
    <!--Start mainmenu area-->
    <section class="main-menu-one stricky">
        <div class="container">
            <div class="menu-style-one clearfix">
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="#">
                                <a href="{{ route('home.index') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            </li>
                            <li class="dropdown"><a href="#">About Us</a>
                                <ul>
                                    <li><a href="{{ route('home.about_us') }}">About Us</a></li>
                                    
                                    <li><a href="{{ route('home.mission') }}">Mission & Vission</a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Service</a>
                                <ul>
                                    @foreach ($latestservice as $services)
                                    @if ($services->status != '0')
                                    <li><a href="{{ route('home.service_details', $services->id ) }}">{{$services->name }}</a></li>
                                    @endif
                                    
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Course</a>
                                <ul>
                                    <li><a href="{{ route('home.all_course') }}">All Courses</a></li>
                                    @foreach ($course as $courses)
                                    <li><a href="{{ route('home.course_category_details', $courses->id ) }}">{{$courses->name }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Job Placment</a>
                                <ul>                                
                                    <li><a href="{{ route('home.placement_cell') }}">Job Placment Cell</a></li>
                                    <li><a href="{{ route('home.job') }}">Job Circular</a></li>
                                    <li><a href="{{ route('home.interview') }}">Up Comming Interview</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Academic</a>
                                <ul>
                                    <li><a href="{{ route('home.teachers') }}">Teachers Information</a></li>
                                    <li><a href="{{ route('home.students') }}">Student Information</a></li>
                                    <li><a href="{{ route('home.notice') }}">Notice</a></li>
                                    <li><a href="{{ route('home.gallery') }}">Gallery</a></li>
                                </ul>
                            </li>
                             <li><a href="{{ route('home.event') }}">Events</a></li>
                            <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="right-side-menu clearfix">
                    <div class="outer-search-box float-left">
                       
                        <div class="search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <span class="border-right two"></span>
                    </div>                 
                </div>
            </div>            
        </div>
    </section>
    <!--End mainmenu area-->
</header>