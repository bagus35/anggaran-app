<?php

namespace App\Http\Controllers;
use App\Models\Sasaran;

use Illuminate\Http\Request;

class SasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sasaran()
    {
        //
        return view('admin.IKU.sasaran.index', [
            'sasarans' => Sasaran::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sasaranCreate()
    {
        return view('admin.IKU.sasaran.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sasaranStore(Request $request)
    {
        //

        $request->validate([
            'nama_sasaran' => 'required',
        ]);

        Sasaran::create($request->all());

        return redirect()->route('admin.sasaran')->with('success', 'Data Sasaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sasaran  $sasaran
     * @return \Illuminate\Http\Response
     */
    public function show(Sasaran $sasaran)
    {
        return Sasaran::with('nama_sasaran')->where('id', $sasaran)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sasaran $sasaran
     * @return \Illuminate\Http\Response
     */
    public function sasaranEdit(Sasaran $sasaran)
    {
        return view('admin.IKU.sasaran.edit', compact('sasaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sasaran  $sasaran
     * @return \Illuminate\Http\Response
     */

     public function sasaranUpdate(Request $request, Sasaran $sasaran)
     {
         // return $request;
         $validatedData = $request->validate(
             [
                 'nama_sasaran' => 'required' . $sasaran->id,
             ]
         );
         $sasaran->update($validatedData);
         return redirect()->back()->with('success','nama sasaran berhasil di update');
         //
     }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sasaran  $sasaran
     * @return \Illuminate\Http\Response
     */
    public function sasaranDelete(Sasaran $sasaran)
    {
        //
        $sasaran->delete();
        return redirect()->back()->with('success', 'nama sasaran berhasil di delete');
    }
}

