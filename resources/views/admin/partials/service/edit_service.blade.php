@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Course</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.view_service') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.update_service',$service->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Service Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Service Slug</label>
                                    <input type="text" name="slug" id="name" class="form-control" value="{{ $service->slug }}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" value="{{ $service->description }}">{{ $service->description }}</textarea>
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Status</h2>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control">
                                <option value="{{$service->status}}">
                                    @if ( $service->status != '0' )
                                        <p>Active</p>
                                    @else
                                        <p>Inactive</p>
                                    @endif
                                </option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
            <a href="{{ route('admin.view_course') }}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>
@endsection