<?php

namespace App\Http\Controllers;

use App\Models\mombaby;
use Illuminate\Http\Request;

class MombabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $mombaby=mombaby::all();
        if($keyword){
            $mombaby=mombaby::where("nama","LIKE","%$keyword%")->get();
        }
        return view('mombaby/index', compact('mombaby'));
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
     * @param  \App\Models\mombaby  $mombaby
     * @return \Illuminate\Http\Response
     */
    public function show(mombaby $mombaby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mombaby  $mombaby
     * @return \Illuminate\Http\Response
     */
    public function edit(mombaby $mombaby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mombaby  $mombaby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mombaby $mombaby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mombaby  $mombaby
     * @return \Illuminate\Http\Response
     */
    public function destroy(mombaby $mombaby)
    {
        //
    }
}
