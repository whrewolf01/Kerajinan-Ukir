<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use PDF;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::with([])->get();
        return view('produk.index',compact('produk'));
    }

    public function cetakProduk()
    {
        $produk = Produk::with([])->all();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $produk = Produk::all();
        return view('produk.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id_produk'=>'required',
            'nama_produk'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'kategori'=>'required',
        ]);

        $prdk = new produk;
        $prdk->id_produk= $request->id_produk;
        $prdk->nama_produk= $request->nama_produk;
        $prdk->deskripsi= $request->deskripsi;
        $prdk->harga= $request->harga;
        $prdk->stok= $request->stok;
        $prdk->kategori= $request->kategori;
        $prdk->save();

        return redirect()-> route('produk.index')->with('success','Data Berhasil di tambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_produk)
    {
        $produk = produk::find($id_produk);

        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'id_produk'=>'required',
            'nama_produk'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'kategori'=>'required',
        ]);

        $prdk = produk::find($id);
        $prdk->id_produk= $request->id_produk;
        $prdk->nama_produk= $request->nama_produk;
        $prdk->deskripsi= $request->deskripsi;
        $prdk->harga= $request->harga;
        $prdk->stok= $request->stok;
        $prdk->kategori= $request->kategori;
        $prdk->save();

        return redirect()-> route('produk.index')->with('success','Data Berhasil di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = produk::find($id);
        $produk->delete();

        return back()->with('succes','Data Berhasil di Hapus!!');
    }

    public function generatePDF()
    {
        $data = produk::all();
        $pdf = PDF::loadView('produk.laporan',[ 'produk'=>$data]);

        return $pdf->download('Laporan Produk.pdf');
    }
}
