@extends('layouts.app')

@section('content')
<div>
    <div class="px-16 flex justify-between">
        <div>
            <h1>Gigs</h1>
        </div>

        <div>
            <button type="submit">New Gig +</button>
        </div>
    </div>
    <div class="px-16 flex justify-between">
        <div>
            <h1>All gigs <span>3404</span></h1>
        </div>

        <div>
            <h1>My gigs <span>1200</span></h1>
        </div>

        <div>
            <h1>Rejected gigs <span>100</span></h1>
        </div>
    </div>
    <div class="px-16 flex justify-between">
        <div>
            <button type="submit">Freelance</button>
        </div>

        <div>
            <button type="submit">Keywords</button>
        </div>

        <div>
            <button type="submit">Location</button>
        </div>

        <div>
            <button type="submit">Remote Friendly</button>
        </div>

        <div>
            <button type="submit">Design</button>
        </div>

        <div>
            <button type="submit">Contract</button>
        </div>
    </div>
    <div class="px-16">
        <table>
            <thead>
                <th></th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
                <th></th>
            </thead>
            <tbody>
                <tr><input type="checkbox" name="" id=""></tr>
                <tr>Product Designer</tr>
                <tr>TM30</tr>
                <tr>20th June, 2020</tr>
                <tr>20,000 - 30,000</tr>
                <tr>
                    <button type="submit">Delete</button></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection