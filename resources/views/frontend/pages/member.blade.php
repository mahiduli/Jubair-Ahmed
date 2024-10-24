@extends('master')

@section('content')
<!--Page Title-->
<section class="page-title" style="background: url('{{asset('frontend/images/resources/page-title.jpg')}}');">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Teachers Information</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Teachers Information</li>
        </ul>         
    </div>
</section>
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->

<!--Cart Section-->
<section class="cart-section sp-eleven">
    <div class="container">
        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer"> 
                <div class="">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th class="Product" colspan="2">Teachers & Stuff Name </th>
                                <th class=""></th>
                                <th class="price">Educational Qualification</th>
                                <th class="tex">Designation</th>
                                <th class="total">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <tr>
                                <td class="product">
                                    <img width="100" src="/memberimage/{{$member->image}}" alt="image">
                                </td>
                                <td>
                                    <h6>{{ $member->name }}</h6>
                                </td>
                                <td></td>
                                <td class="price">
                                    {{ $member->education }}
                                </td>
                                <td class="qty">
                                    {{ $member->designation }}
                                </td>
                                <td class="total">
                                    {{ $member->department }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="your-paginate mt-4">
                    {{ $members->links() }}
                </div>
            </div>          
        </div>   
    </div>
</section>
<!--End Cart Section-->
@endsection