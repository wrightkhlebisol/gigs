@extends('layouts.app')

@section('content')
<div>
    <div class="px-16 py-2 pb-8 mb-2 flex justify-between items-center">
        <div>
            <h1 class="text-3xl text-gray-700 font-bold">Gigs</h1>
        </div>

        <div>
            <a href="/create" class="text-white text-xs bg-purple-900 rounded-md p-2">New Gig +</a>
        </div>
    </div>
    <div class="px-16 mb-2 font-bold text-gray-600 text-sm flex justify-between border-b-2 border-gray-300">
        <div class="border-b-2 border-orange-400 w-1/5">
            <h1 class="pb-4">
                <a href="#">All gigs <span class=" bg-orange-400 px-3 text-white text-xs rounded-md">3404</span></a>
            </h1>
        </div>

        <div class=" w-1/5">
            <h1 class="pb-4">
                <a href="#">My gigs <span class=" bg-orange-400 px-3 text-white text-xs rounded-md">1200</span></a>
            </h1>
        </div>

        <div class=" w-1/5">
            <h1 class="pb-4">
                <a href="#">Rejected gigs <span class=" bg-orange-400 px-3 text-white text-xs rounded-md">100</span></a>
            </h1>
        </div>
    </div>
    <div class="px-16 py-8 flex justify-between justify- text-gray-700">
        <div class="w-1/6">
            <button type="submit" class="border-2 border-gray-300 py-1 px-3 rounded-lg">
                Freelance
            </button>
        </div>

        <div class="w-1/6">
            <button type="submit" class="border-2 border-gray-300 py-1 px-3 rounded-lg">
                <img src="{{asset('img/Icon-move.svg')}}" class="h-4 w-4 inline">
                Keywords
                &or;
            </button>
        </div>

        <div class="w-1/6">
            <button type="submit" class="border-2 border-gray-300 py-1 px-3 rounded-lg">
                <img src="{{asset('img/Icon-pin.svg')}}" class="h-4 w-4 inline">
                Location
                &or;
            </button>
        </div>

        <div class="w-1/6">
            <button type="submit" class="border-2 border-gray-300 py-1 px-3 rounded-lg">
                <img src="{{asset('img/Icon-globe.svg')}}" class="h-4 w-4 inline">
                Remote Friendly
            </button>
        </div>

        <div class="w-1/6">
            <button type="submit" class="border-2 text-orange-400 border-orange-400 py-1 px-3 rounded-lg">
                <img src="{{asset('img/Icon-color-palette.svg')}}" class="h-4 w-4 inline">
                Design
                &check;
            </button>
        </div>

        <div class="w-1/6">
            <button type="submit" class="border-2 border-gray-300 py-1 px-3 rounded-lg">
                <img src="{{asset('img/Icon-briefcase.svg')}}" class="h-4 w-4 inline">
                Contract
            </button>
        </div>
    </div>
    <div class="px-16 flex">
        <table class=" w-full">
            <thead>
                <th></th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Product Designer</td>
                    <td>TM30</td>
                    <td>20th June, 2020</td>
                    <td>20,000 - 30,000</td>
                    <td>
                        <button type="submit">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection