@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Up Comming Interview</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <form action="{{ route('admin.upload_interview') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Interview Title</label>
                                    <input type="text" name="title" id="name" class="form-control" placeholder="Notice Title" required>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Document (pdf,doc,docx,jpg,jpeg)</label>
                                    <input type="file" class="form-control" name="document" required>
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
                            <th width="100">Interview Title</th>
                            <th width="100">Document</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $doc)
                        @if ($doc != "")
                        <tr>
                            <td>{{ $doc->title }}</td>									
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.download_interview',$doc->id) }}">View Document</a>
                            </td>									
                            <td>
                                <a class="btn btn-danger" href="{{ route('admin.delete_interview',$doc->id) }}">Delete</a>
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