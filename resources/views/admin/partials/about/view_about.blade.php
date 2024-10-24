@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>About Us</h1>
            </div> 
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.saveAbout') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- Default box -->
    <div class="container-fluid">
        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">About Description</label>
                                <textarea name="about_desc" id="summernote" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->about_desc }} @endif</textarea>
                            </div>                                         
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Mission</label>
                                <textarea name="mission" id="summernote1" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->mission }} @endif</textarea>
                            </div>                                         
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Vission</label>
                                <textarea name="vission" id="summernote2" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->vission }} @endif</textarea>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Job Placement Description</label>
                                <textarea name="job_placement" id="summernote3" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->job_placement }} @endif</textarea>
                            </div>                                         
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">About Image</h2>	
                        <input type="file" name="image" >
                        @if($about)
                        <img width="150" src="/about/{{$about->image}}">
                        @endif
                    </div>	                                        
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>
@endsection