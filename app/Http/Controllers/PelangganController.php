<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::latest()->paginate(5);
    
        return view('pelanggan.index',compact('pelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'norek' => 'required'
        ]);

        $input = $request->all();
        Pelanggan::create($input);

        return redirect()->route('pelanggan.index')
                        ->with('success','Data Pelanggan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show',compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pelanggan $pelanggan)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'norek' => 'required'
        ]);
  
        $input = $request->all();
          
        $pelanggan->update($input);
    
        return redirect()->route('pelanggan.index')
                        ->with('success','Data Pelanggan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
     
        return redirect()->route('pelanggan.index')
                        ->with('success','Data Pelanggan berhasil dihapus');
    }
}
