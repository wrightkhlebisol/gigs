@extends('layouts.app')

@section('content')
<div class="px-16 flex justify-between">
	<div>
		<h1>Gigs</h1>
	</div>
</div>

<div class="px-16">
	<div>
		<h1>New gig</h1>
	</div>
	<div class="flex justify-between">
		<div class="gigMenu w-1/4">
			<div>Basic Data</div>
			<div>Remuneration</div>
		</div>
		<div class="gigOptions w-3/4">
			<h1>Salary</h1>
			<div class="flex justify-between">
				<div>
					<input type="text" placeholder="Minimum">
				</div>
				<div>
					<input type="text" placeholder="Minimum">
				</div>
			</div>
			<div>
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
	</div>
</div>
@stop