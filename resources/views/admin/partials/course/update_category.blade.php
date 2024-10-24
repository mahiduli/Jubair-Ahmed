@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.view_category') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
    <!-- Main content -->
<section class="content">
    <form action="{{ route('admin.edit_category',$category->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$category->name}}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="summernote" cols="30" rows="10" class="summernote" placeholder="Description">{{$category->description}}</textarea>
                                </div>
                            </div>                                            
                        </div>
                    </div>	                                                                      
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/categoryimage/{{$category->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.view_category') }}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>

@endsection
