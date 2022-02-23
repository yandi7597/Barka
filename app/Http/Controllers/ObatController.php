<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$obat = DB::table('obat')->get();
        $obat=obat::all();
        return view('obat/index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('obat/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$obat=new obat();
        //$obat->nama_obat=$request->nama_obat;
        //$obat->bentuk_obat=$request->bentuk_obat;
        //$obat->dosis=$request->dosis;
        //$obat->kegunaan=$request->kegunaan;
        //$obat->harga=$request->harga;

        //$obat->save();
        $request->validate([
            'nama_obat'=>'required',
            'bentuk_obat'=>'required',
            'dosis'=>'required',
            'kegunaan'=>'required',
            'harga'=>'required'
        ]);
        obat::create($request->all());

        return redirect('/obat')->with('status', 'Data Obat Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        return view ('obat.show',compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(obat $obat)
    {
        return view('obat.edit',compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obat $obat)
    {
        obat::where('id',$obat->id)
        ->update(['nama_obat'=>$request->nama_obat,
        'bentuk_obat'=>$request->bentuk_obat,
        'dosis'=>$request->dosis,
        'kegunaan'=>$request->kegunaan,
        'harga'=>$request->harga
        ]);
        return redirect('/obat')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(obat $obat)
    {
        obat::destroy($obat->id);
        return redirect('obat')->with('status','Data Berhasil Dihapus');
    }
}
