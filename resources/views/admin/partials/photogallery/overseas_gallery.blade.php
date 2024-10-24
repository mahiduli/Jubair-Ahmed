@extends('admin.admin_dashboard')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Overseas Gallery</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{ route('admin.upload_overseas_gallery') }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>	
                                </div>
                                <div class="mb-3">
                                    <label for="image">Images (Only jpg,jpeg,png,webp)</label>
                                    <input type="file" class="form-control" name="image" required>
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
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="100">Name</th>
                            <th width="100">Image</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $img)
                        <tr>
                            <td>{{$img->name}}</td>
                            <td>
                                <img src="/overseasgallery/{{$img->image}}" class="img-thumbnail" width="150" >
                            </td>
                            <td>
                                <a href="{{route('admin.delete_overseas_gallery',$img->id)}}" class="btn btn-danger">Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>										
            </div>
            <div class="card-footer clearfix">
                <div class="your-paginate mt-4">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>


@endsection