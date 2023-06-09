<?php

namespace App\Http\Controllers;

use App\Models\Passion;
use Illuminate\Http\Request;

class PassionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.passion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.passion.create');
        
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
     * @param  \App\Models\Passion  $passion
     * @return \Illuminate\Http\Response
     */
    public function show(Passion $passion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passion  $passion
     * @return \Illuminate\Http\Response
     */
    public function edit(Passion $passion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passion  $passion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passion $passion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passion  $passion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passion $passion)
    {
        //
    }
}
