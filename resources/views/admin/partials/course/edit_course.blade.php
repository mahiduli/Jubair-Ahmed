@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Course</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.view_course') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.update_course',$course->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$course->name}}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" placeholder="Description" value="{{$course->description}}">{{$course->description}}</textarea>
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Slug</h2>
                        <div class="mb-3">
                            <label for="price">Slug</label>
                            <input type="text" name="slug" id="price" class="form-control" placeholder="slug" value="{{$course->slug}}">	
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Registration Fee</h2>
                        <div class="mb-3">
                            <label for="price">Fee</label>
                            <input type="text" name="Fee" id="price" class="form-control" placeholder="Price" value="{{$course->Fee}}">	
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Duration</h2>
                        <div class="mb-3">
                            <label for="price">Duration</label>
                            <input type="text" name="duration" id="price" class="form-control" placeholder="Duration" value="{{$course->duration}}">	
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Status</h2>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control">
                                <option value="{{$course->status}}">
                                    @if ( $course->status != '0' )
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
                <div class="card">
                    <div class="card-body">	
                        <h2 class="h4  mb-3">Category</h2>
                        <div class="mb-3">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="{{$course->category}}">{{$course->category}}</option>
                                @foreach ($category as $categories)
                                <option value="{{$categories->name}}">{{$categories->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Registration Link</h2>
                        <div class="mb-3">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="price" class="form-control" placeholder="Registration Link" value="{{$course->link}}">	
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/courseimage/{{$course->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
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