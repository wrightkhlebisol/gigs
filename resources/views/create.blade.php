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
		<div class="gigMenu">
			<div>Basic Data</div>
			<div>Remuneration</div>
		</div>
		<div class="gigOptions">
			<h1>Salary</h1>
			<div class="flex justify-between">
				<input type="text" placeholder="Minimum">
				<input type="text" placeholder="Minimum">
			</div>
		</div>
	</div>
</div>
@stop