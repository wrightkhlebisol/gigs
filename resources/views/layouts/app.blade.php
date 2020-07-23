<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7e62766cf7.js" crossorigin="anonymous"></script>

	<!-- Styles -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<style>
		/* body {
			font: Regular 45px/63px "Circular Std Bold";
		} */
		#app {
			zoom: 60%;
		}
	</style>

</head>

<body>

	<div id="app" class="font-sans flex h-full">
		<div class="w-1/6 px-6 bg-gray-100 text-sm" style="border: 2px solid #ECECEC; opacity: 0.5; font-family: Nunito; background-color: #FEFEFF;">
			<div>
				<a href="/">
					<img src="{{asset('img/Group493.svg')}}" class="h-20 w-20 items-center justify-center inline">
				</a>
			</div>

			<div class="py-5 items-center">
				<img src="{{asset('img/Icon-home-fill.svg')}}" class="h-4 w-4 items-center justify-center inline">
				<span class="ml-2">
					<a href="/">Dashboard</a>
				</span>
			</div>

			<div class="py-5 items-center">
				<img src="{{asset('img/Icon-briefcase-fill.svg')}}" style="color: #eecd7d;" class="h-4 w-4 items-center justify-center inline">
				<span class="ml-2">
					<a href="/">Gigs</a>
				</span>
			</div>

			<div class="py-5 items-center">
				<img src="{{asset('img/Icon-npm-fill.svg')}}" class="h-4 w-4 items-center justify-center inline">
				<span class="ml-2">Company</span>
			</div>

			<div class="py-5 items-center">
				<img src="{{asset('img/Icon-person-fill.svg')}}" class="h-4 w-4 items-center justify-center inline">
				<span class="ml-2">
					Account
				</span>
			</div>
		</div>

		<div class="w-5/6" style="background-color: #FBFBFF;">
			<header class="justify-between py-6 px-16 flex" style="border: 1px solid #ECECEC; opacity: 1;">
				<div class="w-2/3">
					<input type="search" name="" id="" class="p-2 w-3/4 border-2 border-gray-300 rounded-lg" style="background-color: #FBFBFF;" placeholder=" Search">
				</div>
				<div>
					<img src="{{asset('img/Group140.svg')}}" class="h-4 w-4 mr-12 items-center justify-center inline">
					<img src="{{asset('img/Icon-email.svg')}}" class="h-4 w-4 mr-12 items-center justify-center inline">
					<img src="{{asset('img/Icon-settings.svg')}}" class="h-4 w-4 mr-12 items-center justify-center inline">
					<img src="{{asset('img/Rectangle13.png')}}" class="h-6 w-6 items-center justify-center inline">
				</div>
			</header>
			<main>
				@yield('content')

			</main>
		</div>

	</div>
</body>

</html>