@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Up Comming Interview</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>interview</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<section class="content m-4">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="title-area clearfix">
            <div class="sec-title-one pb-one">
                <h4>Up Comming Interview</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap" style="color: black">
                    <thead>
                        <tr>
                            <th width="100">Title</th>
                            <th width="100">Document</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($interview as $doc)
                        @if ($doc != "")
                        <tr>
                            <td>{{ $doc->title }}</td>	
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.download_interview',$doc->id) }}">View Document</a>
                            </td>
                        </tr>
                        @endif 
                        @endforeach
                    </tbody>
                </table>										
            </div>
            <div class="your-paginate mt-4">
                {{ $interview->links() }}
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection