<?php

namespace App\Http\Controllers;

use App\Models\obatherbal;
use Illuminate\Http\Request;

class ObatherbalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $obatherbal=obatherbal::all();
        if($keyword){
            $obatherbal=obatherbal::where("nama","LIKE","%$keyword%")->get();
        }
        return view('obatherbal/index', compact('obatherbal'));
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
     * @param  \App\Models\obatherbal  $obatherbal
     * @return \Illuminate\Http\Response
     */
    public function show(obatherbal $obatherbal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obatherbal  $obatherbal
     * @return \Illuminate\Http\Response
     */
    public function edit(obatherbal $obatherbal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obatherbal  $obatherbal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obatherbal $obatherbal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obatherbal  $obatherbal
     * @return \Illuminate\Http\Response
     */
    public function destroy(obatherbal $obatherbal)
    {
        //
    }
}
