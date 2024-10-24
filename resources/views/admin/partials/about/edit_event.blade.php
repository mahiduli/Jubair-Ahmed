@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Event</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.view_event') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.update_event',$event->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="name" class="form-control" placeholder="Name" value="{{ $event->title }}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" placeholder="Description" value="{{ $event->description }}">{{ $event->description }}</textarea>
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Date Month Year</h2>
                        <div class="mb-3">
                            <label for="link">Date</label>
                            <input type="text" name="date" id="price" class="form-control" placeholder="Date" value="{{ $event->date }}">	
                        </div>
                        <div class="mb-3">
                            <label for="link">Month</label>
                            <input type="text" name="month" id="price" class="form-control" placeholder="Month Name" value="{{ $event->month }}">	
                        </div>
                        <div class="mb-3">
                            <label for="link">Year</label>
                            <input type="text" name="year" id="price" class="form-control" placeholder="Year" value="{{ $event->year }}">	
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>
                    <img width="150" src="/eventimage/{{$event->image}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
            <a href="{{ route('admin.view_event') }}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>
@endsection