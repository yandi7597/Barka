<?php

namespace App\Http\Controllers;

use App\Models\obatbebas;
use Illuminate\Http\Request;

class ObatbebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $obatbebas=obatbebas::all();
        if($keyword){
            $obatbebas=obatbebas::where("nama","LIKE","%$keyword%")->get();
        }
        return view('obatbebas/index', compact('obatbebas'));
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
     * @param  \App\Models\obatbebas  $obatbebas
     * @return \Illuminate\Http\Response
     */
    public function show(obatbebas $obatbebas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obatbebas  $obatbebas
     * @return \Illuminate\Http\Response
     */
    public function edit(obatbebas $obatbebas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obatbebas  $obatbebas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obatbebas $obatbebas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obatbebas  $obatbebas
     * @return \Illuminate\Http\Response
     */
    public function destroy(obatbebas $obatbebas)
    {
        //
    }
}
