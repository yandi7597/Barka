<?php

namespace App\Http\Controllers;

use App\Models\beauty;
use Illuminate\Http\Request;

class BeautyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $beauty=beauty::all();
        if($keyword){
            $beauty=beauty::where("nama","LIKE","%$keyword%")->get();
        }
        return view('beauty/index', compact('beauty'));
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
     * @param  \App\Models\beauty  $beauty
     * @return \Illuminate\Http\Response
     */
    public function show(beauty $beauty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beauty  $beauty
     * @return \Illuminate\Http\Response
     */
    public function edit(beauty $beauty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beauty  $beauty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beauty $beauty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beauty  $beauty
     * @return \Illuminate\Http\Response
     */
    public function destroy(beauty $beauty)
    {
        //
    }
}
