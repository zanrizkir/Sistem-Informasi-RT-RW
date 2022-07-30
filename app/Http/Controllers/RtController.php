<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
        //menampilkan semua data dari model rt
        $rt = Rt::all();
        // $active = 'siswa';
        return view('admin.rt.index', compact('rt'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::all();
        // return view('wali.create', compact('siswa'),['active' => 'wali']);
        // return view('wali.create', compact('siswa'));
        return view('admin.rt.create');
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
            'rt' => 'required|unique:rts|max:255',
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'email' => 'required|unique:rts|max:255',
            'password' => 'required',
        ]);

        $rt = new rt();
        $rt->rt = $request->rt;
        $rt->nama = $request->nama;
        $rt->jk = $request->jk;
        $rt->tanggal_lahir = $request->tanggal_lahir;
        $rt->agama = $request->agama;
        $rt->email = $request->email;
        $rt->password = $request->password;
        $rt->save();
        return redirect()
            ->route('admin.rt.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show(Rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit(Rt $rt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rt $rt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rt $rt)
    {
        //
    }
}
