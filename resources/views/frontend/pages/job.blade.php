@extends('master')

@section('content')
<style>
    .buttons {
    margin-top: 50px;
    overflow: hidden;
    margin-bottom: 10px;
    display: inline-block;
    .active {
      background-color: #0eb3ed;
      color: #fff;
      font-weight: 700;
    }
    button {
      float: left;
      font-size: .75em;
      background-color: #fff;
      text-transform: uppercase;
      color: #17242d;
      font-weight: 300;
      text-align: center;
      margin: 0;
      padding: 17px 20px;
      border-top: 1px solid #d9d9d9;
      border-bottom: 1px solid #d9d9d9;
      border-right: 1px solid #d9d9d9;
      border-left: 0;
      &:first-child {
        border-left: 1px solid #d9d9d9;
      }
      &:hover {
        border-bottom: 1px solid #0eb3ed;
      }
    }
  }
</style>
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Job Circular</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Job Circular</li>
        </ul>         
    </div>
</section>
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<section class="content m-4">
        <!-- Default box -->
    <div class="container-fluid">
        <div class="text-center">
            <div class="buttons">
                <a href="{{ route('home.job') }}"><button style="color: black;">All</button></a>
              
              @foreach ($job_categories as $job_cat)
              <a href="{{ route('home.job' , ['category' => $job_cat->category_title] ) }}">
                <button style="color: black;">{{ $job_cat->category_title }}</button>
              </a>
              @endforeach
            </div>
          </div>
        <div class="card">
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap" style="color: black">
                    <thead>
                        <tr>
                            <th width="100"></th>
                            <th width="100">Title</th>
                            <th width="100">Document</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $jobItem)

                        <tr>
                            <td>{{ $jobItem->category }}</td>	
                            <td>{{ $jobItem->job_title }}</td>	
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.download_job_circular',$jobItem->id) }}">View Document</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>										
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<div class="your-paginate mt-4">
    {{ $job->links() }}
</div>

@endsection