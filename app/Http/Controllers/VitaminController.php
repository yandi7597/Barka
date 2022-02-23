<?php

namespace App\Http\Controllers;

use App\Models\vitamin;
use Illuminate\Http\Request;

class VitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $vitamin=vitamin::all();
        if($keyword){
            $vitamin=vitamin::where("nama","LIKE","%$keyword%")->get();
        }
        return view('vitamin/index', compact('vitamin'));
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
     * @param  \App\Models\vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function show(vitamin $vitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function edit(vitamin $vitamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vitamin $vitamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(vitamin $vitamin)
    {
        //
    }
}
