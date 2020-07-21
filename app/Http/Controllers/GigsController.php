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
    public function index()
    {
        //
        $gigs = Gigs::all();
        return view('index', compact($gigs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('show', compact($gigs));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('show', compact($gigs));
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
    }
}
