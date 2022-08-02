<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model rt
        // $user = User::with(['rt']);
        // return view('admin.rt.index', compact('user'));

        $rt = Rt::all();
        // $active = 'siswa';
        return view('admin.rt.index', compact('rt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('rt.create', compact('siswa'),['active' => 'rt']);
        // return view('rt.create', compact('siswa'));
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
        // dd($request);

        $validated = $request->validate([
            'rt' => 'required|unique:rts|max:255',
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'image' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->id_role = 2;
        $user->save();

        $rt = new rt();
        $rt->id_user = $user->id;
        $rt->rt = $request->rt;
        $rt->nama = $request->nama;
        $rt->jk = $request->jk;
        $rt->tanggal_lahir = $request->tanggal_lahir;
        $rt->agama = $request->agama;
        // $rt->image = $request->image;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/rt/',$name);
            $rt->image = $name;
        }
        $rt->save();

        return redirect()
            ->route('rt.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rt = Rt::findOrfail($id);
        return view('admin.rt.show', compact('rt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rt = Rt::findOrFail($id);
        return view('admin.rt.edit', compact('rt'));
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
    public function destroy($id)
    {
        $rt = Rt::findOrFail($id);
        // $rt->deleteImage();
        $rt->delete();
        return redirect()
            ->route('rt.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
