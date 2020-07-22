<?php

namespace App\Http\Controllers;

use App\Gigs;
use Illuminate\Http\Request;

class GigsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Gigs $gigs)
    {
        //
        $allGigs = $gigs->orderByDesc('created_at')->get();
        return view('index', compact('allGigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gigs $gigs)
    {
        //
        $gigs->create($request->all());

        return response()->json(['success' => 'User Created', 'user_details' => $request->all()], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function show(Gigs $gigs)
    {
        //
        if (!empty($gigs)) {
            return $gigs;
        } else {
            return response()->json("Gigs $gigs->id not found", 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function edit(Gigs $gigs)
    {
        //
        return view('edit', compact($gigs));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gigs $gigs)
    {
        //
        $gigs->update($request->all());

        return response()->json($gigs, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gigs  $gigs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gigs $gigs)
    {
        //
        if ($gigs->delete()) {
            return $gigs;
        } else {
            return response()->json("Gigs $gigs->id not found", 404);
        }
    }
}
