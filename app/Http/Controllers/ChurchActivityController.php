<?php

namespace App\Http\Controllers;

use App\Models\ChurchActivity;
use Illuminate\Http\Request;

class ChurchActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\ChurchActivity  $churchActivity
     * @return \Illuminate\Http\Response
     */
    public function show(ChurchActivity $churchActivity)
    {
        return view('pages.church-activities.show', compact('churchActivity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChurchActivity  $churchActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(ChurchActivity $churchActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChurchActivity  $churchActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChurchActivity $churchActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChurchActivity  $churchActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChurchActivity $churchActivity)
    {
        //
    }
}
