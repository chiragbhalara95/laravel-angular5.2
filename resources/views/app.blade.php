<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 5.2</title>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.css') }}">

	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	
	<!-- Angular JS -->
	<script src="{{ asset('public/assets/js/angular.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/angular-route.min.js') }}"></script>

	<!-- MY App -->
	<script src="{{ asset('public/app/packages/dirPagination.js') }}"></script>
	<script src="{{ asset('public/app/routes.js') }}"></script>
	<script src="{{ asset('public/app/services/myServices.js') }}"></script>
	<script src="{{ asset('public/app/helper/myHelper.js') }}"></script>

	<!-- App Controller -->
	<script src="{{ asset('public//app/controllers/ProductController.js') }}"></script>
	<style>
	.modal-dialog, .modal-content{
		z-index:1051 !important;
	}
	</style>
</head>
<body ng-app="main-App">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel 5.2</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#/">Home</a></li>
					<li><a href="#/products">Product</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<ng-view></ng-view>
	</div>

	<!-- Scripts -->

</body>
</html>
