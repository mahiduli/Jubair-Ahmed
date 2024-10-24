@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1> Add Testimonial</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.testimonials') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{ route('admin.upload_testimonials') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Student Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Notice Title" required>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Department</label>
                                    <input type="text" name="department" id="name" class="form-control" placeholder="Notice Title" required>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Short Description</label>
                                    <textarea name="short_desc" id="summernote" cols="30" rows="10" class=" form-control" placeholder="Description" required></textarea>
                                </div>
                            </div>
                            <div class="pt-3">
                                <button class="btn btn-primary">Upload</button>
                                <a href="{{ route('admin.testimonials') }}" class="btn btn-primary">Cancel</a>
                            </div>                                         
                        </div>
                    </div>	                                                                      
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- /.card -->
</section>

@endsection