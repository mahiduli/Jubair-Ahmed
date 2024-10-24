@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Courses</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.add_course') }}" class="btn btn-primary">Add Course</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Registration Fee</th>
                            <th>Duration</th>
                            <th>Category</th>
                            <th width="100">Status</th>
                            <th width="100">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course as $courses)
                        @if ($courses != "")
                        <tr>
                            <td>{{ $courses->name }}</td>
                            <td>{{ $courses->Fee }}</td>
                            <td>{{ $courses->duration }}</td>
                            <td>{{ $courses->category }}</td>											
                            <td>
                                @if ( $courses->status != 0 )
                                <a class="btn btn-success">Active</a>
                                @else
                                <a class="btn btn-danger">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.edit_course',$courses->id) }}">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                
                                <a href="{{ route('admin.delete_course',$courses->id) }}" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endif 
                        @endforeach
                        
                    </tbody>
                </table>										
            </div>
            <div class="card-footer clearfix">
                <div class="your-paginate mt-4">
                    {{ $course->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection