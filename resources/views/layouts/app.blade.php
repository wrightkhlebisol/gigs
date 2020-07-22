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
</head>
<body>
    
    <div id="app" class="bg-gray-300 font-sans">
        <div class="container shadow-2xl rounded-lg text-gray-700">
		<div class="py-6 px-4 flex justify-between bg-white rounded-t-lg">
			<div>
				<img src="" class="inline mx-5 rounded-full h-16 w-16 items-center justify-center"/>
				<p class="inline font-bold text-4xl">Internia</p>
			</div>
			<div class="flex content-center font-medium text-gray-600 my-auto">
				
			</div>
			<div class="float-right">
				<div class="flex">
					<p  class="mx-5 mt-2 text-3xl">
						<i class="far fa-bell"></i>
					</p>
					<p  class="mx-5 mt-2 text-3xl">
						<i class="far fa-envelope"></i>
					</p>
					<img src="https://i.pravatar.cc/50?u=xf" class="inline mx-5 rounded-full h-8 w-8 items-center justify-center"/>
				</div>
			</div>
		</div>

		


            @yield('content')

	</div>
    </div>
</body>
</html>
