<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\siswa;

class siswaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $sis = siswa::all();
        return view('page.siswa.index',compact('sis','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('page.siswa.form',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $sis = new siswa;

        $sis->nis = $request->nis;
        $sis->nama = $request->nama;
        $sis->tempat_lahir = $request->tempat;
        $sis->tanggal_lahir = $request->tgl;
        $sis->jenis_kelamin = $request->jk;
        $sis->kelas_id = $request->kelas;

        $sis->save();

        return redirect('/siswa');
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
        $kelas = Kelas::all();

        $sis = siswa::find($id);

        return view('page.siswa.edit',compact('kelas','sis'));   
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
        $sis = siswa::find($id);

        $sis->nis = $request->nis;
        $sis->nama = $request->nama;
        $sis->tempat_lahir = $request->tempat;
        $sis->tanggal_lahir = $request->tgl;
        $sis->jenis_kelamin = $request->jk;
        $sis->kelas_id = $request->kelas;

        $sis->save();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis  = siswa::find($id);
        $sis->delete();
        return redirect('/siswa'); 
    }
}
