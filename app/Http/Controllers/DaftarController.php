<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $daftar = \App\Daftar::all();
        return view('daftar.index', compact('daftar'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
        $daftar = new Daftar;
        $daftar->nis = $request->nis;
        $daftar->nama = $request->nama;
        $daftar->jk = $request->jk;
        $daftar->temp_lahir = $request->temp_lahir;
        $daftar->tgl_lahir = $request->tgl_lahir;
        $daftar->alamat = $request->alamat;
        $daftar->asal_sekolah = $request->asal_sekolah;
        $daftar->kelas = $request->kelas;
        $daftar->jurusan = $request->jurusan;
        $daftar->save();

        return redirect('/daftar')->with('sukses', 'Data berhasil disimpan');
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
        //
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
        //
        $daftar = \App\Daftar::where('id', $id)->first();
        $daftar->nis = $request->nis;
        $daftar->nama = $request->nama;
        $daftar->jk = $request->jk;
        $daftar->temp_lahir = $request->temp_lahir;
        $daftar->tgl_lahir = $request->tgl_lahir;
        $daftar->alamat = $request->alamat;
        $daftar->asal_sekolah = $request->asal_sekolah;
        $daftar->kelas = $request->kelas;
        $daftar->jurusan = $request->jurusan;
        $daftar->update();

        return redirect('/daftar')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $daftar = \App\Daftar::where('id', $id)->first();
        $daftar->delete();
        return redirect('/daftar')->with('sukses', 'Data berhasil dihapus');
    }
}
