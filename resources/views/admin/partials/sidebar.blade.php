{{-- <nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        Py<span>Coder</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">All Courses</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('admin.view_category') }}" class="nav-link">Course Category</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.type') }}" class="nav-link">Courses</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">RealEstate</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property Type</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Advanced UI</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="#" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
</nav> --}}

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    
    <span class="brand-text font-weight-light">ASIA TECHNICAL</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>																
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_about') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>About</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_category') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_course') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Courses</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_service') }}" class="nav-link">
            <i class="nav-icon fas fa-tag"></i>
            <p>Service</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_member') }}" class="nav-link">
            <i class="nav-icon  fas fa-users"></i>
            <p>Managment</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_event') }}" class="nav-link">
            <svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            <p>Event</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.notice') }}" class="nav-link">
            <i class="nav-icon fas fa-tag"></i>
            <p>Notice</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.job_category') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Job Circular Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.job_circular') }}" class="nav-link">
            <svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            <p>Job Circular</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.interview') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Interview</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.testimonials') }}" class="nav-link">
            <i class="nav-icon  fas fa-users"></i>
            <p>Testimonials</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.overseas_gallery') }}" class="nav-link">
            <i class="nav-icon  far fa-file-alt"></i>
            <p>Overseas Partner</p>
          </a>
        </li>	
        <li class="nav-item">
          <a href="{{ route('admin.placement_gallery') }}" class="nav-link">
            <i class="nav-icon  far fa-file-alt"></i>
            <p>Placement Gallery</p>
          </a>
        </li>	
        <li class="nav-item">
          <a href="{{ route('admin.gallery') }}" class="nav-link">
            <i class="nav-icon  far fa-file-alt"></i>
            <p>Gallery</p>
          </a>
        </li>		
        <li class="nav-item">
          <a href="{{ route('admin.setting') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Setting</p>
          </a>																
        </li>					
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>