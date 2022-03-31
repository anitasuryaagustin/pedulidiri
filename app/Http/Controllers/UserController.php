<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function indexadmin()
    {
        $user = User::all();
        return view('user.manageuser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'nik' => $request ->nik,
            'nama'=>$request ->nama,
            'alamat'=>$request ->alamat,
            'image'=>$request->image,
            'no_telp'=>$request ->no_telp,
             'email'=>$request ->email,
             'username'=>$request ->username,
             'password'=> bcrypt($request->password),
             'confirm_password'=>$request ->confirm_password,

        ];

        User::create($data);

        return redirect('/user');
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
        $table = User::where('id',Auth::user()->id);
        return view('user.edit', compact('table'));
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
        $user = User::where('id', Auth::user()->id)->first();
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
    	$user->no_telp = $request->no_telp;
    	$user->email = $request->email;
        $user->username = $request->username;
        $user->foto = $request->foto;

	    $user->update();
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }

        return redirect()->back();

        // if ($request->hasFile('foto')) {
        //     $filename = $request->image->getClientOriginalName();
        //     $request->image->storeAs('images', $filename, 'public');
        //     Auth()->user()->update(['image' => $filename]);
        //     $user->save();
    //   if ($request->hasFile('image')){
    //         $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
    //         $user->foto=$request->file('foto')->getClientOriginalName();
    //         $user->save();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user=User::find($id)->delete();
        return redirect ('/user');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function destroyadmin($id)
    {
         $user=User::find($id)->delete();
        return redirect ('/admins');
    }

     public function cetak_pdf()
    {
    	$user = User::all();

    	$pdf = PDF::loadview('user.pdf',['user'=>$user]);
    	// return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }


}
