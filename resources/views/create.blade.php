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
		<div class="gigMenu w-1/5 rounded-lg shadow-lg bg-white p-8 mr-6">
			<div>Basic Data</div>
			<div>Remuneration</div>
		</div>
		<div class="gigOptions w-3/5 rounded-lg shadow-lg bg-white p-12">
			<h1 class=" text-md mb-3 text-gray-700">Salary</h1>
			<div class="flex justify-between">
				<div class="w-1/2">
					<input type="text" placeholder="Minimum">
				</div>
				<div class="w-1/2">
					<input type="text" placeholder="Minimum">
				</div>
			</div>

			<div class="mb-4 justify-end">
				<a href="/">Back</a>
				<button class="text-white text-xs bg-purple-900 rounded-md p-2">Continue</button>
			</div>

		</div>
	</div>
	<div class="w-3/5 rounded-lg shadow-lg bg-white p-8 mr-6">
		<div class="flex mb-4">
			<div>
				<label for="role">Role</label>
				<input type="text" id="role" value="Product Designer">
			</div>
			<div>
				<label for="role">Company</label>
				<input type="text" value="TM30">
			</div>
		</div>

		<div class="mb-4">
			<p>Location</p>
			<div class="flex">
				<input type="text" placeholder="Country">
				<input type="text" placeholder="State/Region">
			</div>
			<input type="text" placeholder="Address">
		</div>

		<div class="mb-4">
			<p>Add Tags</p>
			<div>
				<input type="text" placeholder="Minimum">
			</div>
			Suggested tags: <span class="underline">full time</span> <span class="underline">Contract</span> <span class="underline">freelance</span>
		</div>

		<div class="mb-4 justify-end">
			<a href="/">Cancel</a>
			<button>Continue</button>
		</div>
	</div>
</div>
@stop