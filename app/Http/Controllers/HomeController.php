<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rt = Rt::where('id_user', auth()->user()->id)->get();
        // if (auth()->user()->id_role === 2) {
        //     return redirect('rt')
        // }
        // dd($rt);

        return view('home', compact('rt'));
    }
}
