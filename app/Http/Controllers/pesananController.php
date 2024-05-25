<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::with([])->get();
        return view('pesanan.index',compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = pelanggan::all();
        return view('pesanan.create', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id_pesanan'=>'required',
            'id_pelanggan'=>'required',
            'tanggal_pesanan'=>'required',
            'status_pesanan'=>'required',
            'total_harga'=>'required',
            'alamat_pengiriman'=>'required',
            'metode_pembayaran'=>'required',
        ]);

        $psn = new pesanan;
        $psn ->id_pesanan= $request->id_pesanan;
        $psn ->id_pelanggan= $request->id_pelanggan;
        $psn ->tanggal_pemesanan= $request->tanggal_pesanan;
        $psn ->status_pesanan= $request->status_pesanan;
        $psn ->total_harga= $request->total_harga;
        $psn ->alamat_pengiriman= $request->alamat_pengiriman;
        $psn ->metode_pembayaran= $request->metode_pembayaran;
        $psn ->save();

        return redirect()-> route('pesanan.index')->with('success','Data Berhasil di tambah.');
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
    public function edit(string $id_pesanan)
    {
        $pesanan = pesanan::find($id_pesanan);

        return view('pesanan.edit', compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'id_pesanan'=>'required',
            'id_pelanggan'=>'required',
            'tanggal_pemasanan'=>'required',
            'status_pemesanan'=>'required',
            'total_harga'=>'required',
            'alamat_pengiriman'=>'required',
            'metode_pembayaran'=>'required',
        ]);

        $psn = new pesanan;
        $psn ->id_pesanan= $request->id_pesanan;
        $psn ->id_pelanggan= $request->id_pelanggan;
        $psn ->tanggal_pemesanan= $request->tanggal_pemesanan;
        $psn ->status_pengiriman= $request->status_pengiriman;
        $psn ->total_harga= $request->total_harga;
        $psn ->alamat_pengiriman= $request->alamat_pengiriman;
        $psn ->metode_pembayaran= $request->metode_pembayaran;
        $psn ->save();

        return redirect()-> route('pesanan.index')->with('success','Data Berhasil di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = pesanan::find($id);
        $pesanan->delete();

        return back()->with('succes','Data Berhasil di Hapus!!');
    }
}
