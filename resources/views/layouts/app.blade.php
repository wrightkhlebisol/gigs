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
		body {
			font: Regular 45px/63px Circular Std Bold;
		}
	</style>

</head>

<body>

	<div id="app" class="bg-gray-300 font-sans flex h-screen">
		<div class="w-1/6 pl-6 bg-gray-100" style="border: 2px solid #ECECEC; opacity: 0.5; font-family: Nunito">
			<div>
				<img src="{{asset('img/Group493.svg')}}" class="h-20 w-20 items-center justify-center inline">
			</div>

			<div class="py-5">
				<img src="{{asset('img/Icon-home-fill.svg')}}" class="h-6 w-6 items-center justify-center inline"> Dashboard
			</div>

			<div class="py-5">
				<img src="{{asset('img/Icon-briefcase-fill.svg')}}" style="color: #eecd7d;" class="h-6 w-6 items-center justify-center inline"> Gigs
			</div>

			<div class="py-5">
				<img src="{{asset('img/Icon-npm-fill.svg')}}" class="h-6 w-6 items-center justify-center inline"> Company
			</div>

			<div class="py-5">
				<img src="{{asset('img/Icon-person-fill.svg')}}" class="h-6 w-6 items-center justify-center inline"> Account
			</div>
		</div>

		<div class="w-5/6 bg-gray-200">
			<header class="justify-between py-6 px-16 flex" style="border: 1px solid #ECECEC; opacity: 1;">
				<div class="w-2/3">
					<input type="search" name="" id="" class="p-2 w-3/4 bg-gray-100 border-2 border-gray-200 rounded-lg" placeholder="Search">
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