<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Barang';
        $barang= Barang ::paginate(5);
        //dd($barang);
        return view('admin.barang', compact ('title','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="inputbarang";
        return view('admin.inputbarang',compact('title'));
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
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_barang' => 'required',
            'jenis' => '',
            'harga' => '',
        ],$messages);
        //dd($validasi);
        Barang::create($validasi);
        return redirect('barang')-> with('success','data berhasil di update');
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
        $title="inputbarang";
        $barang=Barang::find($id);
        return view('admin.inputbarang',compact('title','barang'));
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
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_barang' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ],$messages);
        //dd($validasi);
        Barang::whereid_barang($id)->update($validasi);
        return redirect('barang')-> with('success','data berhasil di update');
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
        Barang::whereid_barang($id)->delete();
        return redirect('barang')-> with('success','data berhasil di update');
    }
}
