@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Job Circular Category</h1>
            </div>
            {{-- <div class="col-sm-6 text-right">
                <a href="{{ route('admin.add_service') }}" class="btn btn-primary">Add Service</a>
            </div> --}}
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{ route('admin.upload_job_category') }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="category_title" id="name" class="form-control" placeholder="Title" required>	
                                </div>
                            </div>
                            <div class="pt-3">
                                <button class="btn btn-primary">Upload</button>
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
                            <th width="100">Title</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $doc)
                        @if ($doc != "")
                        <tr>
                            <td>{{ $doc->category_title }}</td>																		
                            <td>
                                <a class="btn btn-danger" href="{{ route('admin.delete_job_category',$doc->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endif 
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