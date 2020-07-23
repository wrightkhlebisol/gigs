@extends('layouts.app')

@section('content')
<div class="px-16 py-6 mb-2 flex justify-between items-center border-b-2 border-gray-300">
	<div>
		<h1 class="text-3xl text-gray-600 font-bold">Gigs</h1>
	</div>
</div>

<div class="px-16">
	<div>
		<h1 class="py-6 mb-2 text-xl font-medium text-gray-500">New gig</h1>
	</div>
	<div class="flex">
		<div class="gigMenu w-1/5 h-full rounded-lg shadow-lg bg-white p-8 mr-6">
			<div>Basic Data</div>
			<div class="border-l-2 h-10 border-gray-300"></div>
			<div>Remuneration</div>
		</div>

		<div class="w-3/5">
			<gig-details></gig-details>
		</div>
	</div>


</div>
@stop