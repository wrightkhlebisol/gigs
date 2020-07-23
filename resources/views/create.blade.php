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

			<form action="/gig" method="post">
				@csrf
				<div class="rounded-lg shadow-lg bg-white p-12 mb-4">
					<div class="mb-4">
						<div class="flex justify-between">
							<div class="w-1/2 mr-2">
								<label for="role">Role</label>
								<input type="text" name="role" class="border-2 border-gray-200 rounded-lg p-2 w-full block mt-3" id="role" placeholder="e.g Product Designer">
							</div>
							<div class="w-1/2">
								<label for="company">Company</label>
								<input id="company" name="company" class="border-2 border-gray-200 rounded-lg p-2 w-full block mt-3" type="text" placeholder="e.g Krystal Digital">
							</div>
						</div>
					</div>

					<div class="mb-4">
						<p>Location</p>
						<div class="flex justify-between">
							<input type="text" class="border-2 border-gray-200 rounded-lg p-2 w-full mr-2 mt-3" name="country" placeholder="Country">
							<input type="text" class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3" name="state" placeholder="State/Region">
						</div>
						<div>
							<input type="text" class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3" name="address" placeholder="Address">
						</div>
					</div>

					<div class="mb-4">
						<p>Add Tags</p>
						<div>
							<input type="text" class="border-2 border-gray-200 rounded-lg p-2 w-full my-3" name="tags" placeholder="Tags">
						</div>
						<span>
							Suggested tags: <span class="underline">full time</span> <span class="underline">Contract</span> <span class="underline">freelance</span>
						</span>
					</div>

					<div class="my-8" style="text-align: right;">
						<a href="/" class="mr-5">Cancel</a>
						<button class="text-white text-xs bg-purple-900 rounded-md py-3 px-8">Continue</button>
					</div>
				</div>

				<div class=" rounded-lg shadow-lg bg-white p-12 mb-4">

					<h1 class=" text-md mb-3 text-gray-700">Salary</h1>
					<div class="flex justify-between mb-16">
						<div class="w-1/2 mr-2">
							<input type="number" min="0" class="border-2 border-gray-200 rounded-lg p-2 w-full" name="min_salary" placeholder="Minimum">
						</div>
						<div class="w-1/2">
							<input type="number" min="0" class="border-2 border-gray-200 rounded-lg p-2 w-full" name="max_salary" placeholder="Maximum">
						</div>
					</div>

					<div class="mb-4" style="text-align: right;">
						<a href="/" class="mr-5">Back</a>
						<button class="text-white text-xs bg-purple-900 rounded-md py-3 px-8">Add gig</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</div>
@stop