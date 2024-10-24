@extends('admin.admin_dashboard')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
        
    @endif
    <form action="{{ route('admin.upload_gallery') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="image">Images (Only jpg,jpeg,png,webp)</label>
                                    <input type="file" class="form-control" name="image[]" multiple required>
                                </div>
                            </div>
                            <div class="p-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
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

<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <div class="row">
                    @foreach ($data as $img)
                    @if ($img != "")    
                    <div class="col-lg-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="/galleryimage/{{$img->image}}"> 
                        </div>
                        <a href="{{route('admin.delete_gallery',$img->id)}}" class="text-danger w-4 h-4 mr-1">
                            <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-6 h-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                              </svg>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>								
            </div>
            <div class="card-footer clearfix">
                <div class="your-paginate mt-4">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
    <script   src="https://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</section>


@endsection