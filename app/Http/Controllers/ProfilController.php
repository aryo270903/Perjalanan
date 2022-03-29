<?php

namespace App\Http\Controllers;

use App\User;
use PDF;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data= User::where('role', 'user')->get();
        return view('profil.index',compact('data'));
        
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Profil $profil)
    {
        //
    }
    public function edit($id)
    {
        $edit = User::where('id', Auth::user()->id)->first();
        return view('profil.edit',compact('edit'));
    }
    public function update(Request $request,  $id)
    {
        $edit = User::find($id);
        $edit->update($request->all());

        // if($request->gambar){
        //     $gambar = $request->gambar;
        //     $v_gambar = time().rand(100,900)."-".$gambar->getClientOriginalName();
        //     $gambar->move('image/',$gambar);
        // }

        if($request->hasFile('gambar'));
        {
            if($request->gambar > 0){
            $request->file('gambar')->move('image/',$request->file('gambar')->getClientOriginalName());
            $edit->gambar = $request->file('gambar')->getClientOriginalName();
            }
            $edit->save();
        }

        $edit->save();
        return redirect('/profil/edit/$id');
    }

    public function destroy(Profil $profil)
    {
        //
    }

    public function cetak_pdf()
    {
    	$data = User::all();
 
    	$pdf = PDF::loadview('profil.pdf',['data'=>$data]);
    	return $pdf->stream();
    }
}
