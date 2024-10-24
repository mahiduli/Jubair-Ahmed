<head>
	<meta charset="UTF-8">
	@php
        $setting = App\Models\Setting::find(1);
    @endphp
	@if($setting && $setting->meta_title != '')
	<title>{{$setting->meta_title}}</title>
    @else
	<p></p>
    @endif
	

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
	<!-- Responsive stylesheet-->
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
	<!-- Paginate stylesheet-->
	<link rel="stylesheet" href="{{ asset('frontend/css/paginate.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicon/apple-touch-icon.png') }}">
	@if($setting && $setting->meta_image != '')
	<link rel="icon" type="image/png" href="{{$setting->meta_image}}" sizes="32x32">
    @else
	<p></p>
    @endif
    
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon/favicon-16x16.png') }}" sizes="16x16">
    
</head>
{{-- {{ asset('frontend/') }} --}}
