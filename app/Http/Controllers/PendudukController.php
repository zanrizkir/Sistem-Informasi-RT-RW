<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::with('rt')->get();
        return view('adminrt.penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::all();
        return view('adminrt.penduduk.create', compact('rt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:rts|max:255',
            'nama' => 'required',
            'umur' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk'=>'required', 
            'alamat' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'gol_darah' => 'required',
            'id_rt' => 'required',
        ]);

        $penduduk = new Penduduk();
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->umur = $request->umur;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jk = $request->jk;   
        $penduduk->alamat = $request->alamat;
        $penduduk->agama = $request->agama;
        $penduduk->status_nikah = $request->status_nikah;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        $penduduk->id_rt = $request->id_rt;
        $penduduk->save();

        return redirect()
            ->route('penduduk.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::findOrfail($id);
        return view('adminrt.penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        $rt = Rt::all();
        return view('adminrt.penduduk.edit', compact('penduduk', 'rt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $validated = $request->validate([
            'bulan' => 'required',
            'minggu' => 'required',
        ]);

        $penduduk = $penduduk;
        $penduduk->id_rt = $request->id_rt;
        $penduduk->bulan = $request->bulan;
        $penduduk->minggu = $request->minggu;
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Jadwal berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()
            ->route('penduduk.index')
            ->with('success', 'Jadwal berhasil dihapus!');
    }
}
