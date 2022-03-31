<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kota;
class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kota = kota::all();
        return view('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [

           'id' =>$request ->id,
            'nama' =>$request->nama,
            'nik'=>$request->nik,
            'kota' => $request ->kota,
            'kecamatan' => $request ->kecamatan,
            'provinsi' => $request ->provinsi,
            'kelurahan' => $request ->kelurahan
        ];
        Kota::create($data);

        return redirect('/kota');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $table = Kota::find($id);
        return view('kota.edit', compact('table'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Kota::find($id);
        $update = [

            'id' =>$request ->id,
            'nama' =>$request->nama,
            'nik'=>$request->nik,
            'kota' => $request ->kota,
            'kecamatan' => $request ->kecamatan,
            'provinsi' => $request ->provinsi,
            'kelurahan' => $request ->kelurahan
        ];
        kota::find($request->all());

        return redirect('/kota');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $kota=kota::find($id)->delete();
        return redirect ('/kota');
    }
}
