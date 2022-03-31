<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perjalanan;
class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::all();
        return view('perjalanan.index', compact('perjalanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.create');
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
            'tgl_perjalanan' => $request ->tgl_perjalanan,
            'jam'=>$request ->jam,
            'lokasi'=>$request ->lokasi,
            'kota'=>$request ->kota,
             'kecamatan'=>$request ->kecamatan,
            'suhu_tubuh'=>$request ->suhu_tubuh
        ];

        perjalanan::create($data);

        return redirect('/perjalanan');
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
        $table = Perjalanan::find($id);
        return view('perjalanan.edit', compact('table'));
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
        $table = Perjalanan::find($id);
        $update = [

            'id' =>$request ->id,
            'tgl_perjalanan' => $request -> tgl_perjalanan,
            'jam'=> $request -> jam,
            'lokasi'=> $request -> lokasi,
             'kota'=>$request ->kota,
              'kecamatan'=>$request ->kecamatan,
            'suhu_tubuh'=> $request -> suhu_tubuh
        ];
        perjalanan::update($request->all());

        return redirect('/perjalanan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perjalanan=perjalanan::find($id)->delete();
        return redirect ('/perjalanan');
    }
}
