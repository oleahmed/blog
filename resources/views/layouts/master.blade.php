	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Photography</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
			<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('css/simplelightbox.min.css') }}" >
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('css/main.css') }}">

		</head>
		<body>

			@include('partials.header')


			@yield('content')


			@include('partials.footer')


			<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
			<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('js/owl.carousel.min.js') }}"></script>			
			<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
			<script src="{{ asset('js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('js/parallax.min.js') }}"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="{{ asset('js/simple-lightbox.min.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>	
		</body>
	</html>