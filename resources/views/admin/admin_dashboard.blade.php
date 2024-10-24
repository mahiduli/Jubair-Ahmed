<!DOCTYPE html>
<html lang="en">
	@include('admin.partials.head')
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>					
				</ul>
				<div class="navbar-nav pl-2">
					<!-- <ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol> -->
				</div>
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						@include('admin.partials.admin_profile')
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			@include('admin.partials.sidebar')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				@yield('content')
			</div>
			
			<!-- /.content-wrapper -->
			@include('admin.partials.footer')
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		@include('admin.partials.scripts')

		@include('admin.partials.message.toaster')

		{{-- sweet alert --}}
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="{{ asset('assets/js/code/code.js') }}"></script>
	</body>
</html>