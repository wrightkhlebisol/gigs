@extends('layouts.app')

@section('content')
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
<div class="px-16 py-8 pb-2 flex justify-between justify- text-gray-700">
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
    <table class="w-full text-gray-600">
        <thead class="py-2 text-xs font-light">
            <tr class=" items-start">
                <th class=" text-left py-5"></th>
                <th class=" text-left py-5">Role</th>
                <th class=" text-left py-5">Company</th>
                <th class=" text-left py-5">Date
                    <img src="{{asset('img/Group288.svg')}}" class="h-4 w-4 inline">
                </th>
                <th class=" text-left py-5">Salary ($)
                    <img src="{{asset('img/Group288.svg')}}" class="h-4 w-4 inline">
                </th>
                <th class=" text-left py-5"></th>
            </tr>
        </thead>
        <tbody class=" font-medium">


            @forelse($allGigs as $allGig)
            <tr class=" items-start rounded-full bg-white text-gray-800">
                <td class="py-2 pl-5">
                    <input type="checkbox" name="" value="{{$allGig->id}}" id="gig_{{$allGig->id}}">
                </td>
                <td class="py-2">{{$allGig->role}}</td>
                <td class="py-2">{{$allGig->company}}</td>
                <td class="py-2">{{$allGig->created_at}}</td>
                <td class="py-2">{{$allGig->min_salary}} - {{$allGig->max_salary}}</td>
                <td class="py-2 text-right pr-2">
                    <button type="submit" @click="{}" class="bg-yellow-200 text-yellow-600 text-xs px-8 py-1 rounded-lg">Delete</button></td>
            </tr>

            @empty
            <tr>
                <td colspan="6">No gigs yet</td>
            </tr>
            @endforelse


        </tbody>
    </table>
</div>
@endsection