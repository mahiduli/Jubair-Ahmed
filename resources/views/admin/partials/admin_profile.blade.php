@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp
{{-- 
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="wd-30 ht-30 rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
    </a>
    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
                <img class="wd-80 ht-80 rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="">
            </div>
            <div class="text-center">
                <p class="tx-16 fw-bolder">{{ $profileData->name }}</p>
                <p class="tx-12 text-muted">{{ $profileData->email }}</p>
            </div>
        </div>
        <ul class="list-unstyled p-1">
            <li class="dropdown-item py-2">
                <a href="{{route('admin.profile')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="user"></i>
                <span>Profile</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <a href="{{ route('admin.change.password') }}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="edit"></i>
                <span>Change Password</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <a href="javascript:;" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="repeat"></i>
                <span>Switch User</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <a href="{{ route('admin.logout') }}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</li> --}}
<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
    <img src="{{ !empty($profileData->photo) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" class='img-circle elevation-2' width="40" height="40" alt="">
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
    <h4 class="h4 mb-0"><strong>{{ $profileData->name }}</strong></h4>
    <div class="mb-3">{{ $profileData->email }}</div>
    <div class="dropdown-divider"></div>
    <a href="{{route('admin.profile')}}" class="dropdown-item">
        <i class="fas fa-user-cog mr-2"></i> Profile								
    </a>
    <div class="dropdown-divider"></div>
    <a href="{{ route('admin.change.password') }}" class="dropdown-item">
        <i class="fas fa-lock mr-2"></i> Change Password
    </a>
    <div class="dropdown-divider"></div>
    <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger">
        <i class="fas fa-sign-out-alt mr-2"></i> Logout							
    </a>							
</div>