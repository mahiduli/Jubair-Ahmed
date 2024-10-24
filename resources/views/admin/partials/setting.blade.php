@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Settings</h1>
            </div> 
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.saveSetting') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">		
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="title">Meta Title</label>
                                <input type="text" name="meta_title" id="name" class="form-control" placeholder="Name" required @if($setting) value="{{ $setting->meta_title }}" @endif>	
                            </div>
                        </div>		
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Technical Address</label>
                                <textarea name="address"  cols="10" rows="5" class=" form-control" required>@if($setting) {!! $setting->address !!} @endif</textarea>
                            </div>                                         
                        </div>				
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Phone Number</label>
                                <textarea name="phone"  cols="10" rows="5" class=" form-control" required>@if($setting) {{ $setting->phone }} @endif</textarea>
                            </div>                                         
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Gmail</label>
                                <textarea name="gmail"  cols="10" rows="5" class=" form-control" required>@if($setting) {{ $setting->gmail }} @endif</textarea>
                            </div>                                         
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Social Link</h2>							
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Facebook</label>
                                    <input type="text" name="fb_url" id="name" class="form-control" placeholder="Facebook" required @if($setting) value="{{ $setting->fb_url }}" @endif>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Gmail</label>
                                    <input type="text" name="gm_url" id="name" class="form-control" placeholder="Gmail" required @if($setting) value="{{ $setting->gm_url }}" @endif>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="designation">Instagram</label>
                                    <input type="text" name="in_url" id="name" class="form-control" placeholder="Instagram" required @if($setting) value="{{ $setting->in_url }}" @endif>
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Meta Icon</h2>	
                        <input type="file" name="meta_image" >
                        @if($setting)
                        <img width="150" src="/setting/{{$setting->meta_image}}">
                        @endif
                    </div>	                                        
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Technical Icon</h2>	
                        <input type="file" name="image" >
                        @if($setting)
                        <img width="150" src="/setting/{{$setting->image}}">
                        @endif
                    </div>	                                        
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Index Banner</h2>	
                        <input type="file" name="banner_image" >
                        @if($setting)
                        <img width="150" src="/setting/{{$setting->banner_image}}">
                        @endif
                    </div>	                                        
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Upload</button>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>

@endsection