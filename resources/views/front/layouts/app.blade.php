<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>@yield('title')</title>
		<link rel="icon" href="{{ asset('assets/front/images/others/favicon.ico') }}" />

		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/lightgallery/css/lightgallery-bundle.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/fontawesome/css/all.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/animate/animate.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('assets/front/vendors/slick/slick.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/mapbox-gl/mapbox-gl.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css') }}"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="{{ asset('assets/front/css/theme.css') }}" />
	</head>
<body>
    <x-front.header/>
	
	@yield('content-primary')

	<x-front.footer/>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script src="{{ asset('assets/front/vendors/bootstrap/js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/clipboard/clipboard.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/vanilla-lazyload/lazyload.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/lightgallery/lightgallery.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/lightgallery/plugins/video/lg-video.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/isotope/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/slick/slick.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/gsap/gsap.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/gsap/ScrollToPlugin.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/gsap/ScrollTrigger.min.js') }}"></script>
	<script src="{{ asset('assets/front/vendors/mapbox-gl/mapbox-gl.js') }}"></script>
	<script src="{{ asset('assets/front/js/theme.min.js') }}"></script>

	@yield('content-secondary')
</body>
</html>