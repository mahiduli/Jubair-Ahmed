@extends('admin.admin_dashboard')

@section('content')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Member</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.view_member') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('admin.upload_member') }}" method="POST" enctype="multipart/form-data">
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
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" id="name" class="form-control" placeholder="Designation" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Education Qualification</label>
                                    <input type="text" name="education" id="name" class="form-control" placeholder="Education Qualification" >	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="designation">Department of Work</label>
                                    <input type="text" name="department" id="name" class="form-control" placeholder="Department of Work">
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Social Link (For Managment Members)</h2>							
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Facebook</label>
                                    <input type="text" name="fb_url" id="name" class="form-control" placeholder="Facebook">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Gmail</label>
                                    <input type="text" name="gm_url" id="name" class="form-control" placeholder="Gmail">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="designation">Instagram</label>
                                    <input type="text" name="in_url" id="name" class="form-control" placeholder="Instagram">
                                </div>
                            </div>                                          
                        </div>
                    </div>	                                                                      
                </div>
                
                <div class="card mb-3">
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Add Department</h2>
                        <div class="mb-3">
                            <select name="add_menegment" id="status" class="form-control">
                                <option value="1">Added</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">	
                        <h2 class="h4 mb-3">Status</h2>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Image</h2>	
                        <input type="file" name="image" >
                    </div>	                                        
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
            <a href="{{ route('admin.view_member') }}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
    </form>
    <!-- /.card -->
    
</section>
@endsection