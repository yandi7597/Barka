<?php

namespace App\Http\Controllers;

use App\Models\obatresep;
use Illuminate\Http\Request;

class ObatresepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $obatresep=obatresep::all();
        if($keyword){
            $obatresep=obatresep::where("nama","LIKE","%$keyword%")->get();
        }
        return view('obatresep/index', compact('obatresep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obatresep/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'no_hp'=>'required',
            'foto'=>'image|file'
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //dokter::create($request->all());
        obatresep::create([
            'nama'=>$request['nama'],
            'no_hp'=>$request['no_hp'],
            'foto'=>$imgName
        ]);

        return view('obatresep.show')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obatresep  $obatresep
     * @return \Illuminate\Http\Response
     */
    public function show(obatresep $obatresep)
    {
        return view('obatresep/show', compact('obatresep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obatresep  $obatresep
     * @return \Illuminate\Http\Response
     */
    public function edit(obatresep $obatresep)
    {
        return view('obatresep/edit', compact('obatresep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obatresep  $obatresep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obatresep $obatresep)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        obatresep::where('id',$obatresep->id)
        ->update(['nama'=>$request->nama,
        'no_hp'=>$request->no_hp,
        'foto'=>$imgName
        ]);
        return redirect('/obatresep')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obatresep  $obatresep
     * @return \Illuminate\Http\Response
     */
    public function destroy(obatresep $obatresep)
    {
        obatresep::destroy($obatresep->id);
        return redirect('obatresep')->with('status','Data Berhasil Dihapus');
    }
}
