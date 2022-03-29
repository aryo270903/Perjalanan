<?php

namespace App\Http\Controllers;

use App\Models\Peralanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PeralananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Peralanan::where('id_user', Auth::user()->id)->paginate(3);
        return view ('perjalanan.index',compact('data'));
    }

    public function create()
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

        $data= [
            'tgl_perjalanan'=>$request->tgl_perjalanan,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh,
            'id_user'=>Auth::user()->id
            
        ];
        Peralanan::create($data);
        return redirect()->route('perjalanan.index');
    }

    public function show(Peralanan $peralanan)
    {
        //
    }

    public function edit(Peralanan $peralanan)
    {
        //
    }

    public function update(Request $request, Peralanan $peralanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peralanan  $peralanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Peralanan::find($id)->delete();
        return redirect()->route('perjalanan.index');
    }
}
